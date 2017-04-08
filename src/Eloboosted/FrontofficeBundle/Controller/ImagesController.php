<?php

namespace Eloboosted\FrontofficeBundle\Controller;

use Eloboosted\GameinjectionBundle\Entity\TEvenement;
use Eloboosted\GameinjectionBundle\Entity\TProduit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ImagesController extends Controller
{
    public function imgAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('EloboostedGameinjectionBundle:Compte')->find($id);
        $response = base64_decode(str_replace("data:image/png;base64,", "", $user->getImage()));
        $headers = array(
            'Content-Type' => 'image/png');
        return new Response($response, 200, $headers);
    }

    public function EventsimgAction(TEvenement $TEvenement)
    {

        $img = $TEvenement->getImgEvent();
        if (!$img)
        {

            $img = base64_encode(file_get_contents("http://localhost/" . $this->get('assets.packages')->getUrl("/img/no-img.jpg")));

        }


        $response = base64_decode($img);
        $headers = array(
            'Content-Type' => 'image/png');
        return new Response($response, 200, $headers);
    }

    public function ProductsimgAction(TProduit $TProduit, $nb)
    {

        $img = $TProduit->getImgProduit();
        if ($nb == 2)
        {
            $img = $TProduit->getImageProduit2();
        }
        elseif ($nb == 3)
        {
            $img = $TProduit->getImageProduit3();
        }
        if (!$img)
        {

            $img = base64_encode(file_get_contents("http://localhost/" . $this->get('assets.packages')->getUrl("/img/no-img.jpg")));

        }

        $response = base64_decode($img);
        $headers = array(
            'Content-Type' => 'image/png');
        return new Response($response, 200, $headers);
    }
}
