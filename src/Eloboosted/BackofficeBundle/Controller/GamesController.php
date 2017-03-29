<?php

namespace Eloboosted\BackofficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GamesController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $games = $em->getRepository('EloboostedGameinjectionBundle:Games')->findAll();
        return $this->render('EloboostedBackofficeBundle:Games:index.html.twig',array('games'=>$games));

    }
}
