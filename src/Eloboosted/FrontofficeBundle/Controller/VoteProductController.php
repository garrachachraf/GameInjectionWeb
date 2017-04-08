<?php

namespace Eloboosted\FrontofficeBundle\Controller;

use Eloboosted\GameinjectionBundle\Entity\Compte;
use Eloboosted\GameinjectionBundle\Entity\VoteProduct;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class VoteProductController extends Controller
{
   public function newVoteAction($idprod,$nbrevote, Request $request)
   {
       $em = $this->getDoctrine()->getManager();
       $user = new Compte();
       $user = $this->get('security.token_storage')->getToken()->getUser();
       $tpod = $em->getRepository('EloboostedGameinjectionBundle:TProduit')->find($idprod);

       $user = $em->getRepository('EloboostedGameinjectionBundle:Compte')->find($user->getIdCompte());
       $vote = new VoteProduct();
       $vote = $em->getRepository('EloboostedGameinjectionBundle:VoteProduct')->findOneBy(array('idProduitVp'=>$tpod,'idCompteVp'=>$user));

       if (count($vote) ==0)
       {
           $vote = new VoteProduct();
           $vote->setIdProduitVp($tpod);
           $vote->setNombreVote($nbrevote);
           $vote->setIdCompteVp($user);
           $em->persist($vote);
           $em->flush();
           $votes = $em->getRepository('EloboostedGameinjectionBundle:VoteProduct')->findBy(array('idProduitVp'=>$tpod));
           $total = 0 ;
           foreach ($votes as $v)
           {
               $total = $total + $v->getNombreVote();
           }
           $score = round($total/count($votes));
           $tpod = $em->getRepository('EloboostedGameinjectionBundle:TProduit')->find($idprod);
           $tpod->setScoreproduit($score);
           $em->flush($tpod);

       }

       return $this->redirect($request->server->get('HTTP_REFERER'));
   }

}
