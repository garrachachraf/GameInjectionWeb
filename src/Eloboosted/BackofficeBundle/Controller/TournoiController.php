<?php

namespace Eloboosted\BackofficeBundle\Controller;

use Eloboosted\GameinjectionBundle\Entity\Tournoi;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TournoiController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $tournaments = $em->getRepository('EloboostedGameinjectionBundle:Tournoi')->findAll();
        return $this->render('EloboostedBackofficeBundle:Tournoi:index.html.twig',array('tournaments'=>$tournaments));
    }

    public function upAction()
    {
        $em=$this->getDoctrine()->getManager();
        $qb = $em->createQueryBuilder();
        $q = $qb->update('EloboostedGameinjectionBundle:Tournoi', 't')
            ->set('t.etat', 2)
            ->where('t.startDate < ?1')
            ->setParameter(1, new \DateTime())
            ->getQuery();
        $p = $q->execute();
        $qb = $em->createQueryBuilder();
        $q = $qb->update('EloboostedGameinjectionBundle:Tournoi', 't')
            ->set('t.etat', 3)
            ->where('t.endDate < ?1')
            ->setParameter(1, new \DateTime())
            ->getQuery();
        $p = $q->execute();

        return new Response('<html><body> </body></html>');
    }

    public function newAction(Request $request)
    {
        $tournoi = new Tournoi();
        $form = $this->createForm('Eloboosted\BackofficeBundle\Form\TournoiType', $tournoi);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $tournoi->setIdCompteTrn($this->get('security.token_storage')->getToken()->getUser());
            $em->persist($tournoi);
            $em->flush($tournoi);

            return $this->redirectToRoute('eloboosted_backoffice_tournoi_show', array('id' => $tournoi->getIdTournoi()));
        }

        return $this->render('EloboostedBackofficeBundle:Tournoi:new.html.twig', array(
            'tournoi' => $tournoi,
            'form' => $form->createView(),
        ));
    }

    public function showAction(Tournoi $tournoi)
    {
        $deleteForm = $this->createDeleteForm($tournoi);
        $em = $this->getDoctrine()->getManager();
        $comments = $em->getRepository('EloboostedGameinjectionBundle:CommentaireTournoi')->findBy(array('idTournoiCt' => $tournoi));
        return $this->render('EloboostedBackofficeBundle:Tournoi:show.html.twig', array(
            'tournoi' => $tournoi,
            'delete_form' => $deleteForm->createView(),
            'comments' => $comments,
        ));
    }

    /**
     * Displays a form to edit an existing tournoi entity.
     *
     */
    public function editAction(Request $request, Tournoi $tournoi)
    {
        $deleteForm = $this->createDeleteForm($tournoi);
        $editForm = $this->createForm('Eloboosted\BackofficeBundle\Form\TournoiType', $tournoi);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            if ($tournoi->getStartDate() < $tournoi->getEndDate()) {

                $this->getDoctrine()->getManager()->flush();

                return $this->redirectToRoute('eloboosted_backoffice_tournoi_edit', array('id' => $tournoi->getIdTournoi()));
            } else {
                return $this->render('EloboostedFrontofficeBundle:Tournoi:edit.html.twig', array(
                    'tournoi' => $tournoi,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'erreur' => 'erreur date'
                ));
            }
        }

        return $this->render('EloboostedFrontofficeBundle:Tournoi:edit.html.twig', array(
            'tournoi' => $tournoi,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'erreur' => null
        ));
    }

    /**
     * Deletes a tournoi entity.
     *
     */
    public function deleteAction(Request $request, Tournoi $tournoi)
    {
        $form = $this->createDeleteForm($tournoi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tournoi);
            $em->flush($tournoi);
        }

        return $this->redirectToRoute('eloboosted_backoffice_tournoi');
    }

    /**
     * Creates a form to delete a tournoi entity.
     *
     * @param Tournoi $tournoi The tournoi entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tournoi $tournoi)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('eloboosted_backoffice_tournoi_delete', array('id' => $tournoi->getIdTournoi())))
            ->setMethod('DELETE')
            ->getForm();
    }


}
