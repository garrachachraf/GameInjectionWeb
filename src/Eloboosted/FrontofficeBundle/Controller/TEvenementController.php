<?php

namespace Eloboosted\FrontofficeBundle\Controller;

use Eloboosted\GameinjectionBundle\Entity\TEvenement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TEvenementController extends Controller
{
    public function eventsAction($page)
    {
        $em = $this->getDoctrine()->getManager();
        $start = 4 * ($page - 1);
        if ($page==1)
        {
            $start = 0;
        }
        $end = 4 * $page;
        $tEvenements = $em->getRepository('EloboostedGameinjectionBundle:TEvenement')->findBy(array(),array(),$end,$start);
        $pages = ceil(count($em->getRepository('EloboostedGameinjectionBundle:TEvenement')->findAll())/4);
        $lasts = $em->getRepository('EloboostedGameinjectionBundle:TEvenement')->findBy(
            array(),        // $where
            array('dateEvent' => 'DESC'),    // $orderBy
            8,                        // $limit
            0                          // $offset
        );

        return $this->render('EloboostedFrontofficeBundle:tevenement:index.html.twig', array(
            'tEvenements' => $tEvenements,'lasts' => $lasts , 'pages'=>$pages , 'p'=>$page
        ));
    }
    public function showAction(TEvenement $tEvenement)
    {
        $em = $this->getDoctrine()->getManager();
        $tevents = $em->getRepository('EloboostedGameinjectionBundle:TEvenement')->findBy(
            array(),
            array('dateEvent'=>'DESC'),
            5,
            0
        );
        return $this->render('EloboostedFrontofficeBundle:tevenement:show.html.twig', array(
            'tEvenement' => $tEvenement,
            'Tevents'=>$tevents
        ));
    }
    public function streamAction()
    {
        $options = array('client_id'=>'wd54hhxdz79qajdijaofha1zb0dk3g'); //initialize my api key
        $twitchApi = new \TwitchApi\TwitchApi($options); //instance the class twitchapi and insert ur key api into
        $twitchApi->setApiVersion(3); //set version3 'stable'
        $qt = $twitchApi->getChannel('c9sneaky');
        $nb3 = $twitchApi->getChannel('nightblue3');
        $faker = $twitchApi->getChannel('faker');
        $timthetatman = $twitchApi->getChannel('timthetatman');
        $nl_kripp = $twitchApi->getChannel('nl_kripp');
        $user = $twitchApi->getUsersFollowedChannels('urboyjared', 4);
        $channel = array();
        $user = $user['follows'];
        foreach ($user as $item)
        {

            array_push($channel,$item['channel']);


        }

        return $this->render('@EloboostedFrontoffice/tevenement/streamingall.html.twig',array(
            'qt'=>$qt,'nb3'=>$nb3,'faker'=>$faker,'timthetatman'=>$timthetatman,'nl_kripp'=>$nl_kripp,
            'usersoverwatch'=>$channel,

        ));


    }

}
