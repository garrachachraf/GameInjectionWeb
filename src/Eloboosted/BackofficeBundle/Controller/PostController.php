<?php

namespace Eloboosted\BackofficeBundle\Controller;

use Proxies\__CG__\Eloboosted\GameinjectionBundle\Entity\Cathegorie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PostController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }

    public function  addcategorypostAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();

        $category = new Cathegorie();
        if ($request->isMethod('POST'))
        {


            $category->setNom($request->get('name'));
            $em->persist($category);
            $em->flush();



            return($this->redirectToRoute("addcategorypost"));
        }
        return $this->render('EloboostedBackofficeBundle:Post:Addcategory.html.twig');


    }
}
