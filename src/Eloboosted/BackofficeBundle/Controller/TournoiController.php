<?php

namespace Eloboosted\BackofficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TournoiController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $tournaments = $em->getRepository('EloboostedGameinjectionBundle:Tournoi')->findAll();
        return $this->render('EloboostedBackofficeBundle:Tournoi:index.html.twig',array('tournaments'=>$tournaments));
    }
}
