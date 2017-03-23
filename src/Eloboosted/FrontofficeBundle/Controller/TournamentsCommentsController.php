<?php

namespace Eloboosted\FrontofficeBundle\Controller;

use Eloboosted\GameinjectionBundle\Entity\CommentaireTournoi;
use Eloboosted\GameinjectionBundle\Entity\Compte;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TournamentsCommentsController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    public function NewAction(Request $request , $tournoi)
    {
        $em = $this->getDoctrine()->getManager();
        $comment = new CommentaireTournoi();
        $comment->setContenu($request->get('contentcom'));

        $user = $this->get('security.token_storage')->getToken()->getUser();

        $comment->setIdCompteCt($user);

        $comment->setIdTournoiCt($em->getRepository('EloboostedGameinjectionBundle:Tournoi')->find($tournoi));
        $em->persist($comment);
        $em->flush();

        $referer = $request
            ->headers
            ->get('referer');
        return $this->redirect($referer);
    }
}
