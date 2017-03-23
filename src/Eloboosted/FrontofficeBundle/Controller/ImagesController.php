<?php

namespace Eloboosted\FrontofficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ImagesController extends Controller
{
    public function imgAction($id,Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user= $em->getRepository('EloboostedGameinjectionBundle:Compte')->find($id);
        $response =base64_decode(str_replace("data:image/png;base64,","",$user->getImage()));
        $headers = array(
            'Content-Type'     => 'image/png');
        return new Response($response, 200, $headers);
    }
}
