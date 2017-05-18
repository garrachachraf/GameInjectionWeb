<?php

namespace Eloboosted\BackofficeBundle\Controller;

use Eloboosted\BackofficeBundle\Form\GamesType;
use Eloboosted\GameinjectionBundle\Entity\Games;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GamesController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $games = $em->getRepository('EloboostedGameinjectionBundle:Games')->findAll();
        return $this->render('EloboostedBackofficeBundle:Games:index.html.twig',array('games'=>$games));

    }
    public function NewGameAction(Request $request)
    {
        $game = new Games();
        $form = $this->createForm('Eloboosted\BackofficeBundle\Form\GamesType', $game);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($game);
            $em->flush();

            return $this->redirectToRoute('eloboosted_backoffice_games', array('id' => $game->getIdGames()));
        }

        return $this->render('EloboostedBackofficeBundle:Games:NewGame.html.twig', array(
            'game' => $game,
            'form' => $form->createView(),
        ));
    }

    public function DeleteGameAction(Request $request , $id)
    {
        $game = new Games();

        $em = $this->getDoctrine()->getManager();
        $game=$em->getRepository("EloboostedGameinjectionBundle:Games")->find($id);

        $em->remove($game);
        $em->flush();

        return $this->redirectToRoute("eloboosted_backoffice_games");
    }

    public function EditGameAction(Request $request, Games $game)
    {
        $deleteForm = $this->createDeleteForm($game);
        $editForm = $this->createForm('Eloboosted\BackofficeBundle\Form\GamesType', $game);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('eloboosted_backoffice_games', array('id' => $game->getIdGames()));
        }

        return $this->render('EloboostedBackofficeBundle:Games:EditGame.html.twig', array(
            'game' => $game,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    private function createDeleteForm(Games $game)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('yes_delete', array('id' => $game->getIdGames())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
    public function accecptedAction(Games $games){
        $em = $this->getDoctrine()->getManager();
        if ($games->getEtat()==0)
        {
            $games->setEtat(1);
        }
        else
        {
            $games->setEtat(0);
        }
        $em->persist($games);
        $em->flush();

        return $this->redirectToRoute("eloboosted_backoffice_games");
    }


}
