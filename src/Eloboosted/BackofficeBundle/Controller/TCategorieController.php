<?php

namespace Eloboosted\BackofficeBundle\Controller;

use Eloboosted\GameinjectionBundle\Entity\TCategorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TCategorieController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tCategories = $em->getRepository('EloboostedGameinjectionBundle:TCategorie')->findAll();

        return $this->render('EloboostedBackofficeBundle:tcategorie:index.html.twig', array(
            'tCategories' => $tCategories,
        ));
    }

    /**
     * Creates a new tCategorie entity.
     *
     */
    public function newAction(Request $request)
    {
        $tCategorie = new Tcategorie();
        $form = $this->createForm('Eloboosted\FrontofficeBundle\Form\TCategorieType', $tCategorie);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $tCategories = $em->getRepository('EloboostedGameinjectionBundle:TCategorie')->findAll();
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tCategorie);
            $em->flush($tCategorie);

            return $this->redirectToRoute('tcategorie_index', array('id' => $tCategorie->getIdCategorie(),
                'tCategories' => $tCategories));
        }

        return $this->render('EloboostedBackofficeBundle:tcategorie:new.html.twig', array(
            'tCategorie' => $tCategorie,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tCategorie entity.
     *
     */
    public function showAction(TCategorie $tCategorie)
    {
        $deleteForm = $this->createDeleteForm($tCategorie);

        return $this->render('EloboostedBackofficeBundle:tcategorie:show.html.twig', array(
            'tCategorie' => $tCategorie,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tCategorie entity.
     *
     */
    public function editAction(Request $request, TCategorie $tCategorie)
    {
        $deleteForm = $this->createDeleteForm($tCategorie);
        $editForm = $this->createForm('Eloboosted\FrontofficeBundle\Form\TCategorieType', $tCategorie);
        $editForm->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $tCategories = $em->getRepository('EloboostedGameinjectionBundle:TCategorie')->findAll();
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tcategorie_index', array('id' => $tCategorie->getIdCategorie(),'tCategories' => $tCategories));
        }

        return $this->render('EloboostedBackofficeBundle:tcategorie:edit.html.twig', array(
            'tCategorie' => $tCategorie,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'tCategories' => $tCategories
        ));
    }

    /**
     * Deletes a tCategorie entity.
     *
     */
    public function deleteAction(Request $request, TCategorie $tCategorie)
    {
        $form = $this->createDeleteForm($tCategorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tCategorie);
            $em->flush($tCategorie);
        }

        return $this->redirectToRoute('tcategorie_index');
    }

    /**
     * Creates a form to delete a tCategorie entity.
     *
     * @param TCategorie $tCategorie The tCategorie entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TCategorie $tCategorie)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tcategorie_delete', array('id' => $tCategorie->getIdCategorie())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}
