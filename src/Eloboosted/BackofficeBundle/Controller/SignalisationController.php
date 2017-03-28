<?php

namespace Eloboosted\BackofficeBundle\Controller;

use Eloboosted\GameinjectionBundle\Entity\Notification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SignalisationController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    public function WarnSenderAction(Request $request)
    {
        $id = $request->get('id');
        $idSignalisation=$request->get('idSignalisation');


        $em = $this->getDoctrine()->getManager();

        $notification = new Notification();

        $signalisation=$em->getRepository("EloboostedGameinjectionBundle:Signalisation")->find($idSignalisation);

        $compte=$em->getRepository("EloboostedGameinjectionBundle:Compte")->find($this->get('security.token_storage')->getToken()->getUser()->getIdCompte());

        $target=$em->getRepository("EloboostedGameinjectionBundle:Compte")->find($id);

        $notification->setIdCompteNot($target);
        $notification->setContenu('You made a false report');
        $notification->setDateNotification(new \DateTime('now'));
        $notification->setNotificationtitle('Admin message :');
        $notification->setVue(0);

//        $notification->setNotificationtitle('Invite request');
//        $notification->setContenu('a warning' );
//        $notification->setInvite(null);
//        $notification->setForum(null);
//        $notification->setMessage(null);
//        $notification->setDateNotification(new \DateTime('now'));
//        $notification->setIdCompteNot($target);
//        $notification->setVue(0);


        $target->setNombreDeSignalisation($target->getNombreDeSignalisation()+1);
//
//
//        $em = $this->getDoctrine()->getManager();
//
        $em->persist($notification);
        $em->persist($target);
        $em->remove($signalisation);
        $em->flush();

        return $this->redirectToRoute('AccountReports');
    }

    public function WarnTargetAction(Request $request)
    {
        $id = $request->get('id');
        $idSignalisation=$request->get('idSignalisation');


        $em = $this->getDoctrine()->getManager();

        $notification = new Notification();

        $signalisation=$em->getRepository("EloboostedGameinjectionBundle:Signalisation")->find($idSignalisation);

        $compte=$em->getRepository("EloboostedGameinjectionBundle:Compte")->find($this->get('security.token_storage')->getToken()->getUser()->getIdCompte());

        $target=$em->getRepository("EloboostedGameinjectionBundle:Compte")->find($id);

//        $notification->setIdCompteNot($target);
//        $notification->setContenu('Your account has been reported for immoral activities in our site ,
//         further action will be taken if this behavior continued');
//        $notification->setDateNotification(new \DateTime('now'));
//        $notification->setNotificationtitle('Admin message :');
//        $notification->setVue(0);
//
        $notification->setNotificationtitle('Invite request');
        $notification->setContenu('You just recieved a warning to inappropriet content' );
        // $notification->setInvite($this->get('security.token_storage')->getToken()->getUser()->getIdCompte());
        $notification->setDateNotification(new \DateTime('now'));
        $notification->setIdCompteNot($target);
        $notification->setVue(0);


        $target->setNombreDeSignalisation($target->getNombreDeSignalisation()+1);
//
//
//        $em = $this->getDoctrine()->getManager();
//
        $em->persist($notification);
        $em->persist($target);
        $em->remove($signalisation);
        $em->flush();

        return $this->redirectToRoute('AccountReports');
    }


}
