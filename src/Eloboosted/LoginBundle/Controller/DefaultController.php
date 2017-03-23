<?php

namespace Eloboosted\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Authentication\Token\AnonymousToken;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {   if ($request->isMethod("POST")){
        $success = 0 ;
        $em = $this->getDoctrine()->getManager();
        $pseudo = $request->get('login_username');
        $pass  = $request->get('login_password');
        $user = $em->getRepository("EloboostedGameinjectionBundle:Compte")->findOneBy(array('pseudo'=>$pseudo,"motDePasse"=>$pass));
        if ($user != null)
        {
            $success = 1;
            $providerKey = 'secured_area'; // your firewall name
            $token = new UsernamePasswordToken($user, null, $providerKey, $user->getRoles());

            $this->container->get('security.token_storage')->setToken($token);
            if ($user->getAdmin()==1){
                return $this->redirectToRoute("eloboosted_backoffice_homepage");
            }
            else{
                return $this->redirectToRoute("home");
            }
        }


    }

        return $this->render("EloboostedLoginBundle:Default:loginform.html.twig");
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

    public function SignOutAction(Request $request)
    {
        $this->container->get('security.token_storage')->setToken(null);
        return $this->redirectToRoute("home");
    }
}
