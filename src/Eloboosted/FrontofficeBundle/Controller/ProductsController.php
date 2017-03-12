<?php

namespace Eloboosted\FrontofficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProductsController extends Controller
{
    public function AddProductAction(){

        return $this->render('EloboostedFrontofficeBundle:Products:addProduct.html.twig');
    }
}
