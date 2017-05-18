<?php

namespace Eloboosted\BackofficeBundle\Controller;

use Eloboosted\GameinjectionBundle\Entity\Gamelist;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class GamelistController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $gameslist = $em->getRepository('EloboostedGameinjectionBundle:Gamelist')->findAll();
        return $this->render('EloboostedBackofficeBundle:Gamelist:index.html.twig', array('gameslist' => $gameslist));

    }

    public function newGamelistAction(Request $request)
    {
        $gamelist = new Gamelist();
        $form = $this->createForm('Eloboosted\BackofficeBundle\Form\GamelistType', $gamelist);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($gamelist);
            $em->flush();

            return $this->redirectToRoute('eloboosted_gamelist_index');
        }

        return $this->render('EloboostedBackofficeBundle:Gamelist:new.html.twig',array('form' => $form->createView()));
    }

    public function deleteAction(Gamelist $gamelist)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($gamelist);
        $em->flush();
        return $this->redirectToRoute('eloboosted_gamelist_index');

    }
}
