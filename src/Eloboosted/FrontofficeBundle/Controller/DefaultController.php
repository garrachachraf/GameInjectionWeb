<?php

namespace Eloboosted\FrontofficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EloboostedFrontofficeBundle:Default:index.html.twig');
    }
}
