<?php

namespace Eloboosted\BackofficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EloboostedBackofficeBundle:Default:index.html.twig');
    }
}
