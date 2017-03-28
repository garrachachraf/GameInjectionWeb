<?php

namespace Eloboosted\FrontofficeBundle\Controller;

use Eloboosted\GameinjectionBundle\Entity\CommentairePost;
use Eloboosted\GameinjectionBundle\Entity\Listjaime;
use Eloboosted\GameinjectionBundle\Entity\Post;
use Eloboosted\GameinjectionBundle\Entity\Signalisation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


class PostController extends Controller
{
    public function indexAction(Request $request)
    {

        return $this->render('', array());
    }
    public function  addPostAction(Request $request)
    {


        $em = $this->getDoctrine()->getManager();
        $category =$em->getRepository("EloboostedGameinjectionBundle:Cathegorie")->findAll();
        $post=new Post();
        if ($request->isMethod('POST'))
        {


            $post->setSujet($request->get('message'));
            $post->setTitre($request->get('title'));
            $post->setIdComptePost($this->get('security.token_storage')->getToken()->getUser());
            $post->setDate(new \DateTime('now'));

            $C= $em->getRepository("EloboostedGameinjectionBundle:Cathegorie")->find($request->get('category'));

            $post->setCathegorieSpecifique($C);
            $em->persist($post);
            $em->flush();



            return($this->redirectToRoute("showAllPosts"));
        }
        return $this->render('@EloboostedFrontoffice/Post/addPost.html.twig',array("category" => $category));

    }


    public function showAllPostsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $post =$em->getRepository("EloboostedGameinjectionBundle:Post")->findAll();

        $paginator  = $this->get('knp_paginator');
        $result=$paginator->paginate(
            $post,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',5)

        );

        $comments = $this->getDoctrine()->getRepository('EloboostedGameinjectionBundle:CommentairePost')->findAll();



        return $this->render('@EloboostedFrontoffice/Post/showAllPosts.html.twig.',array("post" => $post,"post" => $result,"comments" => $comments));

    }

    public function  readPostAction(Request $request)
    {
        $idPost= $request->get('idPost');
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository("EloboostedGameinjectionBundle:Post")->findOneBy(array("idPost"=>$idPost));
        $commentaire = $em->getRepository("EloboostedGameinjectionBundle:CommentairePost")->findBy(array("idPostCp"=>$idPost));
        $unlike = $em->getRepository("EloboostedGameinjectionBundle:Listjaime")->findBy(array("idCompteLj"=>$this->get('security.token_storage')->getToken()->getUser()));
        $postreported = $em->getRepository("EloboostedGameinjectionBundle:Signalisation")->findBy(array("idCommentaireSng"=>null));

        return $this->render('@EloboostedFrontoffice/Post/readPost.html.twig',array("post" => $post , "commentaire" => $commentaire,"unlike" => $unlike,"postreported" => $postreported));




    }

    public function removePostAction(Request $request){
        $idpost= $request->get('idPost');
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository("EloboostedGameinjectionBundle:Post")->find($idpost);
        $commentaire = $em->getRepository("EloboostedGameinjectionBundle:CommentairePost")->findBy(array("idPostCp"=>$idpost));


        foreach ($commentaire as $c)
        {

            $em->remove($c);
            $em->flush();

        }

        $em->remove($post);
        $em->flush();

        return($this->redirectToRoute("showAllPosts"));
    }


    public function  likeAction($id,$post)
    {


        $em = $this->getDoctrine()->getManager();
        $C=  $em->getRepository("EloboostedGameinjectionBundle:CommentairePost")->find($id);
        $like = $em->getRepository("EloboostedGameinjectionBundle:Listjaime")->findOneBy(array("idCompteLj"=>$this->get('security.token_storage')->getToken()->getUser(),"idCommentaireLj"=>$id));
        $L = new Listjaime();
        if($like == null)
        {
            $L->setIdCommentaireLj($C);
            $L->setIdCompteLj($this->get('security.token_storage')->getToken()->getUser());


            $em->persist($L);
            $em->flush();
        }
        else
        {
            $em->remove($like);
            $em->flush();
        }




        $post = $em->getRepository("EloboostedGameinjectionBundle:Post")->findOneBy(array("idPost"=>$post));
        $commentaire = $em->getRepository("EloboostedGameinjectionBundle:CommentairePost")->findBy(array("idPostCp"=>$post));
        $unlike = $em->getRepository("EloboostedGameinjectionBundle:Listjaime")->findBy(array("idCompteLj"=>$this->get('security.token_storage')->getToken()->getUser()));
        $postreported = $em->getRepository("EloboostedGameinjectionBundle:Signalisation")->findBy(array("idCommentaireSng"=>null));


        return $this->redirectToroute('readPost',array("idPost" => $post->getIdPost()));


    }


    public  function  commentaireAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $unlike = $em->getRepository("EloboostedGameinjectionBundle:Listjaime")->findBy(array("idCompteLj"=>$this->get('security.token_storage')->getToken()->getUser()));
        $commentaitre = $this->getDoctrine()->getRepository('EloboostedGameinjectionBundle:CommentairePost')->findBy(
            array('idPostCp' => $id),array('date' => 'desc'));
        $nbrlike = $em->getRepository("EloboostedGameinjectionBundle:Listjaime")->findAll();
        $commentreported = $em->getRepository("EloboostedGameinjectionBundle:Signalisation")->findAll();


        return $this->render('EloboostedFrontofficeBundle:Post:commentaire.html.twig',array('commentaire' => $commentaitre,"unlike" => $unlike,"nbrlike" => $nbrlike,"commentreported" => $commentreported));
    }

    public  function  AddcommentaireAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository("EloboostedGameinjectionBundle:Post")->find($request->get('id'));
        $compte = $em->getRepository("EloboostedGameinjectionBundle:Compte")->find($this->get('security.token_storage')->getToken()->getUser()->getIdCompte());
        $commentaire1=new CommentairePost();
        $commentaire1->setIdCompteCp($compte);
        $commentaire1->setIdPostCp($post);
        $commentaire1->setContenu($request->get('msg'));
        $commentaire1->setDate(new \DateTime('now'));
        $commentaire1->setMarquesolution(0);



        $em->persist($commentaire1);
        $em->flush();

        return new JsonResponse(array('data'=>'success'));
    }

    public function  reportAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $P=  $em->getRepository("EloboostedGameinjectionBundle:Post")->find($id);
        $S = new Signalisation();

        $S->setIdPostSng($P);
        $S->setIdCompteSng($this->get('security.token_storage')->getToken()->getUser());
        $S->setIdCommentaireSng(null);

            $em->persist($S);
            $em->flush();





        $commentaire = $em->getRepository("EloboostedGameinjectionBundle:CommentairePost")->findBy(array("idPostCp"=>$P));
        $unlike = $em->getRepository("EloboostedGameinjectionBundle:Listjaime")->findBy(array("idCompteLj"=>$this->get('security.token_storage')->getToken()->getUser()));
        $postreported = $em->getRepository("EloboostedGameinjectionBundle:Signalisation")->findBy(array("idCommentaireSng"=>null));


        return $this->redirectToroute('readPost',array("idPost" => $P->getIdPost()));


    }

    public function  reportcommentAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $C = $em->getRepository("EloboostedGameinjectionBundle:CommentairePost")->findOneBy(array("idCommentaire"=>$id));
        $P=  $em->getRepository("EloboostedGameinjectionBundle:Post")->findOneBy(array("idPost"=>$C->getIdPostCp()));
        $S = new Signalisation();

        $S->setIdPostSng($P);
        $S->setIdCompteSng($this->get('security.token_storage')->getToken()->getUser());
        $S->setIdCommentaireSng($C);

        $em->persist($S);
        $em->flush();




        $commentaire = $em->getRepository("EloboostedGameinjectionBundle:CommentairePost")->findBy(array("idPostCp"=>$P));
        $unlike = $em->getRepository("EloboostedGameinjectionBundle:Listjaime")->findBy(array("idCompteLj"=>$this->get('security.token_storage')->getToken()->getUser()));
        $postreported = $em->getRepository("EloboostedGameinjectionBundle:Signalisation")->findBy(array("idCommentaireSng"=>null));


        return $this->redirectToroute('readPost',array("idPost" => $P->getIdPost()));


    }

    }
