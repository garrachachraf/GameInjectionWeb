<?php

namespace Eloboosted\BackofficeBundle\Controller;

use Eloboosted\GameinjectionBundle\Entity\TEvenement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TEvenementController extends Controller
{

    /**
     * Lists all tEvenement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tEvenements = $em->getRepository('EloboostedGameinjectionBundle:TEvenement')->findAll();

        return $this->render('EloboostedBackofficeBundle:tevenement:index.html.twig', array(
            'tEvenements' => $tEvenements,
        ));
    }

    private function getidvid($url)
    {

        parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
        return $my_array_of_vars['v'];
    }

    /**
     * Creates a new tEvenement entity.
     *
     */
    public function newAction(Request $request)
    {
        $tEvenement = new TEvenement();
        $form = $this->createForm('Eloboosted\FrontofficeBundle\Form\TEvenementType', $tEvenement);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $link1 = $this->getidvid($tEvenement->getLien());
            $tEvenement->setLien('https://www.youtube.com/embed/'.$link1);
            $tEvenement->setDureeevent($this->getyoutubeduration($link1));
            if ($form->isValid())
            {
                $em->persist($tEvenement);
                $em->flush($tEvenement);
            }


            return $this->redirectToRoute('tevenement_index');
        }

        return $this->render('EloboostedBackofficeBundle:tevenement:new.html.twig', array(
            'tEvenement' => $tEvenement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tEvenement entity.
     *
     */

    /**
     * Displays a form to edit an existing tEvenement entity.
     *
     */
    public function editAction(Request $request, TEvenement $tEvenement)
    {
        $deleteForm = $this->createDeleteForm($tEvenement);
        $editForm = $this->createForm('Eloboosted\FrontofficeBundle\Form\TEvenementType', $tEvenement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tevenement_edit', array('id' => $tEvenement->getIdEvenement()));
        }

        return $this->render('EloboostedBackofficeBundle:tevenement:edit.html.twig', array(
            'tEvenement' => $tEvenement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tEvenement entity.
     *
     */
    public function deleteAction(Request $request, TEvenement $tEvenement)
    {
        $form = $this->createDeleteForm($tEvenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tEvenement);
            $em->flush($tEvenement);
        }

        return $this->redirectToRoute('tevenement_index');
    }

    /**
     * Creates a form to delete a tEvenement entity.
     *
     * @param TEvenement $tEvenement The tEvenement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TEvenement $tEvenement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tevenement_delete', array('id' => $tEvenement->getIdEvenement())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
    public function getyoutubeduration($id)  {
        $apikey_YT = "AIzaSyDABDUQNpLvzuF3xnqGXhmdym8uDg7aBOQ";
        $ytrequrl = 'https://www.googleapis.com/youtube/v3/videos?id='.$id.'&part=contentDetails&key='.$apikey_YT;
        $info= file_get_contents($ytrequrl);
        $obj = json_decode($info,true);
        $_youtubeDurationTime = $obj['items'][0]['contentDetails']['duration'] ;
        $time = new \DateTime('@0'); // Unix epoch
        $time->add(new \DateInterval($_youtubeDurationTime));
        return $time->format('i:s');
    }
}
