<?php

namespace Eloboosted\FrontofficeBundle\Controller;

use Eloboosted\GameinjectionBundle\Entity\Games;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Game controller.
 *
 */
class GamesController extends Controller
{
    /**
     * Lists all game entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $games = $em->getRepository('EloboostedGameinjectionBundle:Games')->findAll();

        return $this->render('EloboostedFrontofficeBundle:games:index.html.twig', array(
            'games' => $games,
        ));
    }

    /**
     * Creates a new game entity.
     *
     */
    public function newAction(Request $request)
    {
        $game = new Games();
        $form = $this->createForm('Eloboosted\FrontofficeBundle\Form\GamesType', $game);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($game);
            $em->flush();

            return $this->redirectToRoute('yes_show', array('id' => $game->getIdGames()));
        }

        return $this->render('EloboostedFrontofficeBundle:games:new.html.twig', array(
            'game' => $game,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a game entity.
     *
     */
    public function showAction(Games $game)
    {

        $deleteForm = $this->createDeleteForm($game);

        return $this->render('EloboostedFrontofficeBundle:games:show.html.twig', array(
            'game' => $game,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing game entity.
     *
     */
    public function editAction(Request $request, Games $game)
    {
        $deleteForm = $this->createDeleteForm($game);
        $editForm = $this->createForm('Eloboosted\FrontofficeBundle\Form\GamesType', $game);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('yes_edit', array('id' => $game->getIdGames()));
        }

        return $this->render('EloboostedFrontofficeBundle:games:edit.html.twig', array(
            'game' => $game,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a game entity.
     *
     */
    public function deleteAction(Request $request, Games $game)
    {
        $form = $this->createDeleteForm($game);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($game);
            $em->flush($game);
        }

        return $this->redirectToRoute('yes_index');
    }

    /**
     * Creates a form to delete a game entity.
     *
     * @param Games $game The game entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Games $game)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('yes_delete', array('id' => $game->getIdGames())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
