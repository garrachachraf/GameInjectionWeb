<?php

namespace Eloboosted\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {   $success = 0;
        if ($request->isMethod("POST")){
        $success = 1 ;
        $em = $this->getDoctrine()->getManager();
        $pseudo = $request->get('login_username');
        $pass  = $request->get('login_password');
        $user = $em->getRepository("EloboostedGameinjectionBundle:Compte")->findOneBy(array('pseudo'=>$pseudo,"motDePasse"=>$pass));
        if ($user != null)
        {
            $success = 2;
            $providerKey = 'secured_area'; //  firewall name
            $token = new UsernamePasswordToken($user, null, $providerKey, $user->getRoles());

            $this->container->get('security.token_storage')->setToken($token);
            if ($user->getAdmin()==1){
                return $this->redirectToRoute("eloboosted_backoffice_homepage");
            }
            else{
                return $this->redirectToRoute("userpage");
            }
        }


        }

        return $this->render("EloboostedLoginBundle:Default:loginform.html.twig",array("success"=>$success));
    }

    public function checkloginsAction(Request $request)
    {
        $success = 0 ;
        $em = $this->getDoctrine()->getManager();
        $pseudo = $request->get('login_username');
        $pass  = $request->get('login_password');
        $user = $em->getRepository("EloboostedGameinjectionBundle:Compte")->findOneBy(array('pseudo'=>$pseudo,"motDePasse"=>$pass));
        if ($user != null)
        {
            $success = 1;
        }
        return $this->render('EloboostedLoginBundle:Default:index.html.twig',array("user"=>$user,"success"=>$success));
    }
}
