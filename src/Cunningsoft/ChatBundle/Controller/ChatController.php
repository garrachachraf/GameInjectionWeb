<?php

namespace Cunningsoft\ChatBundle\Controller;

use Cunningsoft\ChatBundle\Entity\Message;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/chat")
 */
class ChatController extends Controller
{
    /**
     * @return Response
     *
     * @Route("/{channel}", name="cunningsoft_chat_show", defaults={"channel" = "default"})
     * @Template
     */
    public function showAction($channel)
    {
        return array(
            'updateInterval' => $this->container->getParameter('cunningsoft_chat.update_interval'),
            'channel' => $channel
        );
    }

    /**
     * @param Request $request
     *
     * @return Response
     *
     * @Route("/post/{channel}", name="cunningsoft_chat_post", defaults={"channel" = "default"})
     */
    public function postAction(Request $request)
    {
        $message = new Message();

        $user=$this->getDoctrine()->getManager()->getRepository('EloboostedGameinjectionBundle:Compte')->find(33);
        $message->setAuthor($user);
        $message->setChannel('default');
        $message->setMessage($request->get('message'));
        $message->setInsertDate(new \DateTime("now"));
        $this->getDoctrine()->getManager()->persist($message);
        $this->getDoctrine()->getManager()->flush();

        return new Response('Successful');
    }

    /**
     * @Route("/list/{channel}", name="cunningsoft_chat_list", defaults={"channel" = "default"})
     * @Template
     */
    public function listAction($channel)
    {
        $messages = $this->getDoctrine()->getRepository('CunningsoftChatBundle:Message')->findBy(
            array('channel' => $channel),
            array('id' => 'desc'),
            $this->container->getParameter('cunningsoft_chat.number_of_messages')
        );

        return array(
            'messages' => $messages,
        );
    }
}
