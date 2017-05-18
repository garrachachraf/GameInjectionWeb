<?php

namespace Eloboosted\BackofficeBundle\Controller;

use Eloboosted\GameinjectionBundle\Entity\Cathegorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CathegorieController extends Controller
{
    public function addCathegorieAction(Request $request)
    {
        $cathegorie = new Cathegorie();
        $form = $this->createForm('Eloboosted\BackofficeBundle\Form\CathegorieType', $cathegorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($cathegorie);
            $em->flush();

            return $this->redirectToRoute('eloboosted_backoffice_cathegorieList', array('id' => $cathegorie->getId()));
        }

        return $this->render('EloboostedBackofficeBundle:Cathegorie:addCathegorie.html.twig', array(
            'Cathegorie' => $cathegorie,
            'form' => $form->createView(),
        ));
    }
    public function cathegorieListAction()
    {
        $em = $this->getDoctrine()->getManager();
        $cathegories = $em->getRepository('EloboostedGameinjectionBundle:Cathegorie')->findAll();
        return $this->render('EloboostedBackofficeBundle:Cathegorie:cathegorieList.html.twig',array('cathegories'=>$cathegories));

    }
    public function deleteCathAction(Request $request , $id)
    {
        $cathegorie = new Cathegorie();

        $em = $this->getDoctrine()->getManager();
        $cathegorie=$em->getRepository("EloboostedGameinjectionBundle:Cathegorie")->find($id);

        $em->remove($cathegorie);
        $em->flush();

        return $this->redirectToRoute("eloboosted_backoffice_cathegorieList");
    }

    public function EditCathAction(Request $request, Cathegorie $cathegorie)
    {
        $deleteForm = $this->createDeleteForm($cathegorie);
        $editForm = $this->createForm('Eloboosted\BackofficeBundle\Form\CathegorieType', $cathegorie);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('eloboosted_backoffice_cathegorieList', array('id' => $cathegorie->getId()));
        }

        return $this->render('EloboostedBackofficeBundle:Cathegorie:EditCath.html.twig', array(
            'cathegorie' => $cathegorie,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    private function createDeleteForm(Cathegorie $cathegorie)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('eloboosted_backoffice_deleteCath', array('id' => $cathegorie->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

}
