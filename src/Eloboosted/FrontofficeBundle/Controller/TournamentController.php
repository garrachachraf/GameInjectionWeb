<?php

namespace Eloboosted\FrontofficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TournamentController extends Controller
{
    public function addAction(Request $request)
    {
        return $this->render("EloboostedFrontofficeBundle:Tournament:addTournament.html.twig");
    }
}
