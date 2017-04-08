<?php

namespace Eloboosted\FrontofficeBundle\Controller;

use Eloboosted\GameinjectionBundle\Entity\TProduit;
use Eloboosted\GameinjectionBundle\Entity\VoteProduct;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TProduitController extends Controller
{
    /**
     * Lists all tProduit entities.
     *
     */
    public function indexAction(Request $request ,$page)
    {
        $em = $this->getDoctrine()->getManager();

        $start = 3 * ($page - 1);
        if ($page == 1) {
            $start = 0;
        }
        $end = 3 * $page;
        $tproducts = $em->getRepository('EloboostedGameinjectionBundle:TProduit')->findBy(array(), array(), $end, $start);
        $pages = ceil(count($em->getRepository('EloboostedGameinjectionBundle:TProduit')->findAll()) / 3);
        $a = $request->get('a');
        if ($a == 1)
        {
            $tproducts = $em->getRepository('EloboostedGameinjectionBundle:TProduit')->findBy(array(), array('dateProduit'=>'desc'), $end, $start);
        }
        if ($a == 2)
        {
            $tproducts = $em->getRepository('EloboostedGameinjectionBundle:TProduit')->findBy(array(), array('scoreproduit'=>'desc'), $end, $start);
        }
        if ($a == 3)
        {
            $tproducts = $em->getRepository('EloboostedGameinjectionBundle:TProduit')->findBy(array(), array('libelleProduit'=>'asc'), $end, $start);
        }
        if ($a == 4)
        {
            $tproducts = $em->getRepository('EloboostedGameinjectionBundle:TProduit')->findBy(array(), array('prixProduit'=>'asc'), $end, $start);
        }
        if ($a == 6)
        {
            $tproducts = $em->getRepository('EloboostedGameinjectionBundle:TProduit')->findBy(array('etat'=>'Exchange'), array(), $end, $start);
        }
        if ($a == 5)
        {
            $tproducts = $em->getRepository('EloboostedGameinjectionBundle:TProduit')->findBy(array('etat'=>'Sell'), array(), $end, $start);
        }

        return $this->render('EloboostedFrontofficeBundle:tproduit:index.html.twig', array(
            'tproducts' => $tproducts, 'pages' => $pages, 'p' => $page,'tree'=>$a
        ));
    }

    /**
     * Creates a new tProduit entity.
     *
     */
    public function newAction(Request $request)
    {
        $tProduit = new Tproduit();
        $form = $this->createForm('Eloboosted\FrontofficeBundle\Form\TProduitType', $tProduit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $tProduit->setIdCompteProd($this->get('security.token_storage')->getToken()->getUser());
            $tProduit->setDateProduit(new \DateTime('now'));
            $em->persist($tProduit);
            $em->flush($tProduit);
            $init = array(
                'token'=>'ahirebkujbmiowtjh2j7zixm9x8513',
                'user'=>'u8ysepinn1c2pxcz2ewpu4jkth9qov',
                'message'=>'Hey Admin A Product Has Been Added '.$tProduit->getDateProduit()->format('Y-m-d').'You may Want To consult it Product Libelle : '.$tProduit->getLibelleProduit().' Product Id'.$tProduit->getIdProduit()
            );
            $params = 'token='.$init['token'].'&user='.$init['user'].'&message='.$init['message'];
            $pushover=curl_init();
            curl_setopt($pushover,CURLOPT_URL   ,'https://api.pushover.net/1/messages.json');
            curl_setopt($pushover,CURLOPT_POST,sizeof($init));
            curl_setopt($pushover,CURLOPT_POSTFIELDS,$params);
            curl_exec($pushover);
            curl_close($pushover);
            return $this->redirectToRoute('tproduit_show', array('id' => $tProduit->getIdProduit()));
        }

        return $this->render('EloboostedFrontofficeBundle:tproduit:new.html.twig', array(
            'tProduit' => $tProduit,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tProduit entity.
     *
     */
    public function showAction(TProduit $tProduit)
    {
        $Voteproduct = new VoteProduct();
        $form = $this->createForm('Eloboosted\FrontofficeBundle\Form\VoteProductType', $Voteproduct);
        $deleteForm = $this->createDeleteForm($tProduit);
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $votes = $em->getRepository('EloboostedGameinjectionBundle:VoteProduct')->findBy(array('idCompteVp' => $user, 'idProduitVp' => $tProduit));
        $voted = 0;
        if ($votes)
        {
            $voted = 1;
        }
        $lasts =
            $em->getRepository('EloboostedGameinjectionBundle:TProduit')->findBy(
                array('etat' => 'Sell'),        // $where
                array('dateProduit' => 'DESC'),    // $orderBy
                4,                        // $limit
                0                          // $offset
            );
        $votes = $em->getRepository('EloboostedGameinjectionBundle:VoteProduct')->findBy(array('idProduitVp' => $tProduit));
        $score = count($votes);

        return $this->render('EloboostedFrontofficeBundle:tproduit:show.html.twig', array(
            'tProduit' => $tProduit,
            'delete_form' => $deleteForm->createView(),
            'lasts' => $lasts,
            'VoteProduct' => $Voteproduct,
            'form' => $form->createView(),
            'voted' => $voted,
            'score' => $score

        ));
    }

    /**
     * Displays a form to edit an existing tProduit entity.
     *
     */
    public function editAction(Request $request, TProduit $tProduit)
    {
        $deleteForm = $this->createDeleteForm($tProduit);
        $editForm = $this->createForm('Eloboosted\FrontofficeBundle\Form\TProduitType', $tProduit);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tproduit_show', array('id' => $tProduit->getIdProduit()));
        }

        return $this->render('EloboostedFrontofficeBundle:tproduit:edit.html.twig', array(
            'tProduit' => $tProduit,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tProduit entity.
     *
     */
    public function deleteAction(Request $request, TProduit $tProduit)
    {
        $form = $this->createDeleteForm($tProduit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tProduit);
            $em->flush($tProduit);
        }

        return $this->redirectToRoute('tproduit_index');
    }

    /**
     * Creates a form to delete a tProduit entity.
     *
     * @param TProduit $tProduit The tProduit entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TProduit $tProduit)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tproduit_delete', array('id' => $tProduit->getIdProduit())))
            ->setMethod('DELETE')
            ->getForm();
    }

    public function SearchProductAction(Request $request)
    {
        $p = $request->get('p');
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT t
    FROM EloboostedGameinjectionBundle:TProduit t
    WHERE t.libelleProduit LIKE :p'
        )->setParameter('p', '%' . $p . '%');
        $Porducts = $query->getResult();
        return ($this->render('EloboostedFrontofficeBundle:tproduit:search.html.twig', array('Products' => $Porducts)));
    }
    public function CalenderAction()
    {
        return($this->render('EloboostedFrontofficeBundle:tproduit:calender.html.twig'));
    }



}
