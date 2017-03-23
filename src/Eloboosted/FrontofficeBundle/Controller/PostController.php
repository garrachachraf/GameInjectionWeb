<?php

namespace Eloboosted\FrontofficeBundle\Controller;

use Eloboosted\GameinjectionBundle\Entity\CommentairePost;
use Eloboosted\GameinjectionBundle\Entity\Listjaime;
use Eloboosted\GameinjectionBundle\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
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


    public function showAllPostsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $post =$em->getRepository("EloboostedGameinjectionBundle:Post")->findAll();

        return $this->render('@EloboostedFrontoffice/Post/showAllPosts.html.twig.',array("post" => $post));

    }

    public function  readPostAction(Request $request)
    {
        $idPost= $request->get('idPost');
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository("EloboostedGameinjectionBundle:Post")->findOneBy(array("idPost"=>$idPost));
        $commentaire = $em->getRepository("EloboostedGameinjectionBundle:CommentairePost")->findBy(array("idPostCp"=>$idPost));
        $commentaire1=new CommentairePost();
        $unlike = $em->getRepository("EloboostedGameinjectionBundle:Listjaime")->findBy(array("idCompteLj"=>$this->get('security.token_storage')->getToken()->getUser()));



        return $this->render('@EloboostedFrontoffice/Post/readPost.html.twig',array("post" => $post , "commentaire" => $commentaire,"unlike" => $unlike));




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


    public function  likeAction(Request $request)
    {





        return $this->render('@EloboostedFrontoffice/Post/commentaire.html.twig',array());


    }


    public  function  commentaireAction($id)
    {
        $commentaitre = $this->getDoctrine()->getRepository('EloboostedGameinjectionBundle:CommentairePost')->findBy(
            array('idPostCp' => $id));


        $em = $this->getDoctrine()->getManager();
        //$C1= $request->get('idCommentaireLj');
        // $C=  $em->getRepository("EloboostedGameinjectionBundle:CommentairePost")->find($C1);
        //$like = $em->getRepository("EloboostedGameinjectionBundle:Listjaime")->findOneBy(array("idCompteLj"=>$this->get('security.token_storage')->getToken()->getUser(),"idCommentaireLj"=>$C));
        $L = new Listjaime();
        // if($like == null)
        //{
        //   $L->setIdCommentaireLj($C);
        // $L->setIdCompteLj($this->get('security.token_storage')->getToken()->getUser());


//            $em->persist($L);
//            $em->flush();
        //   }
        //   else
        // {
        //        $em->remove($like);
        //      $em->flush();
        //  }



        $idPost= $id;
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository("EloboostedGameinjectionBundle:Post")->findOneBy(array("idPost"=>$idPost));
        $commentaire = $em->getRepository("EloboostedGameinjectionBundle:CommentairePost")->findBy(array("idPostCp"=>$idPost));
        $commentaire1=new CommentairePost();
        $unlike = $em->getRepository("EloboostedGameinjectionBundle:Listjaime")->findBy(array("idCompteLj"=>$this->get('security.token_storage')->getToken()->getUser()));


        return $this->render('EloboostedFrontofficeBundle:Post:commentaire.html.twig',array('commentaire' => $commentaitre,"unlike" => $unlike));
    }

    public  function  AddcommentaireAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $post = $em->getRepository("EloboostedGameinjectionBundle:Post")->findOneBy(array("idPost"=>$id));
        $commentaire1=new CommentairePost();
        $commentaire1->setIdCompteCp($this->get('security.token_storage')->getToken()->getUser());
        $commentaire1->setIdPostCp($post);
        $commentaire1->setContenu($request->get('replay'));
        $commentaire1->setDate(new \DateTime('now'));


        $em->persist($commentaire1);
        $em->flush();
        return new JsonResponse(array('data'=>'success'));
    }
}
