<?php

namespace Eloboosted\FrontofficeBundle\Controller;

use Eloboosted\GameinjectionBundle\Entity\List_ami;
use Eloboosted\GameinjectionBundle\Entity\Notification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class NotificationController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
    public function NotificationlistRenderAction()
    {
        $notifications = $this->getDoctrine()->getRepository('EloboostedGameinjectionBundle:Notification')->findBy(
            array('idCompteNot' => $this->get('security.token_storage')->getToken()->getUser())
        );

        return $this->render('@EloboostedFrontoffice/Notification/listNots.html.twig',array('notifications' => $notifications));
    }

    public function acceptInvFromNotAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $notification = new Notification();

        $compte=$this->get('security.token_storage')->getToken()->getUser();

        $notification = $em->getRepository('EloboostedGameinjectionBundle:Notification')->find($request->get('idNot'));

            $ajoutListAmi = new List_ami();

            $cmp1=$em->getRepository('EloboostedGameinjectionBundle:Compte')->find($compte->getIdCompte());
            $cmp2=$em->getRepository('EloboostedGameinjectionBundle:Compte')->find($notification->getInvite());

            $ajoutListAmi->setIdCompte1La($cmp1);
            $ajoutListAmi->setIdCompte2La($cmp2);


            $em = $this->getDoctrine()->getManager();

            $em->persist($ajoutListAmi);
            $em->remove($notification);
            $em->flush();

        return new JsonResponse(array('data'=>json_encode('success')));
    }

    public function RefuseInvFromNotAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $notification = new Notification();



        $notification = $em->getRepository('EloboostedGameinjectionBundle:Notification')->find($request->get('idNot'));




        $em = $this->getDoctrine()->getManager();

        $em->remove($notification);
        $em->flush();

        return new JsonResponse(array('data'=>json_encode('success')));
    }
}
