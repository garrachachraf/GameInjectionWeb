<?php

namespace Eloboosted\GameinjectionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        return $this->render('EloboostedGameinjectionBundle:Default:index.html.twig',array("user"=>$user));
    }

}
