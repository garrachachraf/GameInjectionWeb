<?php

namespace Eloboosted\FrontofficeBundle\Controller;

use Eloboosted\GameinjectionBundle\Entity\Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Eloboosted\GameinjectionBundle\Entity\Compte;
use Eloboosted\GameinjectionBundle\Entity\Notification;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class MessageController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    public function showMessagesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $currentCompte=$this->get('security.token_storage')->getToken()->getUser();
        $myMessages=$em->getRepository('EloboostedGameinjectionBundle:Message')->findBy(array('recepteurMsg'=>$currentCompte->getIdCompte()));
        return $this->render('', array('myMessages' => $myMessages));
    }

    public function SendMessageAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $ToId=$request->get('id');
        $notification =new Notification();
        $message=new Message();
        $compte=$em->getRepository('EloboostedGameinjectionBundle:Compte')->find($ToId);

        if ($request->isMethod('POST'))
        {

            $notification->setNotificationtitle('Recieved message');
            $notification->setContenu('the user '.$this->get('security.token_storage')->getToken()->getUser()->getPseudo().' sent you a message');
            $notification->setMessage(1);
            $notification->setDateNotification(new \DateTime('now'));
            $notification->setIdCompteNot($compte);
            $notification->setVue(0);

            $message->setContenu($request->get('MessageContent'));
            $message->setDate(new \DateTime('now'));
            $message->setEmetteurMsg($this->get('security.token_storage')->getToken()->getUser());
            $message->setRecepteurMsg($compte);

            $em = $this->getDoctrine()->getManager();

            $em->persist($notification);
            $em->persist($message);
            $em->flush();


        }
        return new JsonResponse(array('data'=>json_encode('success')));
    }
}
