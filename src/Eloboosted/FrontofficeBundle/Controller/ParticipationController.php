<?php

namespace Eloboosted\FrontofficeBundle\Controller;

use Eloboosted\GameinjectionBundle\Entity\Compte;
use Eloboosted\GameinjectionBundle\Entity\Participation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class ParticipationController extends Controller
{
    public function newParticipationAction(Request $request ,$tournament)
    {
        $user=new Compte();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $tournaments = $em->getRepository('EloboostedGameinjectionBundle:Tournoi')->find($tournament);
        $participation = new Participation();
        $participation->setIdComptePart($user);
        $participation->setIdTournoiPart($tournaments);
        $participation->setRkey(rand(100,10000));
        $em->persist($participation);
        $em->flush();

        $providerKey = 'secured_area'; // your firewall name
        $token = new UsernamePasswordToken($user, null, $providerKey, $user->getRoles());
        $this->container->get('security.token_storage')->setToken($token);
        $user = $em->getRepository('EloboostedGameinjectionBundle:Compte')->find($user->getIdCompte());
        $user->setPoints($user->getPoints() - $tournaments->getPrixParJoueur());
        $em->flush();


        $referer = $request
            ->headers
            ->get('referer');
        return $this->redirect($referer);

    }
}
