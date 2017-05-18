<?php

namespace Eloboosted\BackofficeBundle\Controller;

use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('EloboostedGameinjectionBundle:Compte')->findBy(array(),array('points'=>'desc'));
        $NbUsers = count($users);
        $top3 =  array_slice($users, 0,3);

        $NbGames = count($em->getRepository('EloboostedGameinjectionBundle:Games')->findAll());
        $NbTournois = count($em->getRepository('EloboostedGameinjectionBundle:Tournoi')->findAll());
        $NbPosts = count($em->getRepository('EloboostedGameinjectionBundle:Post')->findAll());
        $NbProd = count($em->getRepository('EloboostedGameinjectionBundle:TProduit')->findAll());
        return $this->render('EloboostedBackofficeBundle:Default:index.html.twig', array(
            'compts' => $NbUsers,
            'games' => $NbGames,
            'tournois' => $NbTournois,
            'posts' => $NbPosts,
            'prods' => $NbProd,
            'ob'=> $this->getTournoisChart(),
            'top3'=>$top3
        ));
    }

    private function getTournoisChart()
    {

        $fees = $this->getdata(1);
        $dates = $this->getdata(2);

        $series = array(
            array("name" => "Fees (points) : ", "data" => $fees)
        );
        $ob = new Highchart();
        $ob->chart->renderTo('linechart');
        $ob->title->text('');
        $ob->yAxis->title(array('text' => "Fees"));
        $ob->xAxis->title(array('text'  => "Tournaments Dates"));
        $ob->xAxis->categories($dates);
        $ob->series($series);


        return $ob;



    }
    private function getdata($g)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT sum(t.prixParJoueur) as fees
    FROM EloboostedGameinjectionBundle:Tournoi t
    GROUP BY t.startDate'
        );
        $fees = array();
        $fees1 = $query->getResult();
        $query2 = $em->createQuery('SELECT t.startDate as tt FROM EloboostedGameinjectionBundle:Tournoi t GROUP BY t.startDate');

        $dates = array();
        $tournois = $query2->getResult();
        foreach ($fees1 as $t) {
            array_push($fees, intval($t['fees']));
        }
        foreach ($tournois as $t) {
            array_push($dates, $t['tt']->format('d-m-20y'));
        }


        if ($g==1)
        {
            return $fees;
        }
        else
        {
            return $dates ;
        }

    }
}
