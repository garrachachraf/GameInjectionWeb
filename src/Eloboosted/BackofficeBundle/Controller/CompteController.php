<?php

namespace Eloboosted\BackofficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CompteController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    public function AccountReportsAction()
    {
        $em=$this->getDoctrine()->getManager();
        $S = $em->getRepository("EloboostedGameinjectionBundle:Signalisation")->findAll();
        return $this->render('EloboostedBackofficeBundle:Compte:AccountReports.html.twig',array('reports'=>$S));

    }
}
