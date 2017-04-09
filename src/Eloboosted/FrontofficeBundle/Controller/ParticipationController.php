<?php

namespace Eloboosted\FrontofficeBundle\Controller;

use Eloboosted\GameinjectionBundle\Entity\Compte;
use Eloboosted\GameinjectionBundle\Entity\Participation;
use Eloboosted\GameinjectionBundle\Entity\Tournoi;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Validator\Constraints\DateTime;


class ParticipationController extends Controller
{
    public function newParticipationAction(Request $request, $tournament)
    {
        $user = new Compte();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $tournaments = $em->getRepository('EloboostedGameinjectionBundle:Tournoi')->find($tournament);
        $participation = new Participation();
        $participation->setIdComptePart($user);
        $participation->setIdTournoiPart($tournaments);
        $participation->setRkey(rand(100, 10000));
        $em->persist($participation);
        $em->flush();

        $providerKey = 'secured_area'; // your firewall name
        $token = new UsernamePasswordToken($user, null, $providerKey, $user->getRoles());
        $this->container->get('security.token_storage')->setToken($token);
        $user = $em->getRepository('EloboostedGameinjectionBundle:Compte')->find($user->getIdCompte());
        $user->setPoints($user->getPoints() - $tournaments->getPrixParJoueur());
        $em->flush();


        $referer = $request
            ->headers
            ->get('referer');
        return $this->redirect($referer);

    }

    public function ticketAction(Participation $participation)
    {

        $pdf = $this->get('white_october.tcpdf')->create();
        $pdf->SetCreator('Game Injection');
        $pdf->SetAuthor('GameInjection - G.Achraf');
        $pdf->SetTitle('Ticket N'.$participation->getIdParticipation());
        $pdf->SetSubject('Ticket N'.$participation->getIdParticipation());
        $pdf->SetKeywords('GameInjection, ticket');
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        $pdf->SetMargins(5, 10, 5);
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf->SetFont('courier', '', 12);
        $pdf->AddPage();

        $pdf->Image('../web/img/ticket.png', 0, 0, 210, 100, '', '', '', true, 300, '', false, false, 0);
        //img supported game
        $imgdata = base64_decode($participation->getIdTournoiPart()->getImageTournoi());
        $pdf->Image('@' . $imgdata, 10, 20, 20, 10, '', '', '', true, 300, '', false, false, 0);
        // logo tournament
        $imgdata = base64_decode($participation->getIdTournoiPart()->getIdGameTrn()->getImage());
        $pdf->Image('@' . $imgdata, 54, 6, 100, 49, '', '', '', true, 300, '', false, false, 0);
        //years
        $html = '<div style="color: black; "><h2>' . $participation->getIdTournoiPart()->getStartDate()->format('20y') . '</h2></div>';
        $pdf->writeHTMLCell(0, 0, 175, 53, $html, 'LRTB', 1, 0, true, '', true);

        //day
        $html = '<div style="color: black;"><font size="50">' . $participation->getIdTournoiPart()->getStartDate()->format('d') . '</font></div>';
        $pdf->writeHTMLCell(0, 0, 170, 45, $html, 'LRTB', 1, 0, true, '', true);


        //month
        $monthNum = $participation->getIdTournoiPart()->getStartDate()->format('m') ;
        $monthName = date('F', mktime(0, 0, 0, $monthNum, 10));
        $html = '<div style="color: black; "><h2>' . $monthName . '</h2></div>';
        $pdf->writeHTMLCell(0, 0, 173, 33, $html, 'LRTB', 1, 0, true, '', true);
        // num ticket
        $html = '<div style="color: #835fa6; ">Ticket N° ' . $participation->getIdParticipation() . '</div>';
        $pdf->writeHTMLCell(0, 0, 170, 83, $html, 'LRTB', 1, 0, true, '', true);

        //QR Code
        $html = $this->renderView('EloboostedFrontofficeBundle:participation:ticket.html.twig',array('p'=>$participation));
        $pdf->writeHTMLCell(0, 0, 123, 58, $html, 'LRTB', 1, 0, true, '', true);

        //Tournament name
        $name = strtoupper($participation->getIdTournoiPart()->getNom());
        $html = '<div style="color: white; "><font size="50"><b>' . $name . '</b></font></div>';
        $pdf->writeHTMLCell(0, 0, 20, 65, $html, 'LRTB', 1, 0, true, '', true);


        $pdf->Output(sys_get_temp_dir() . '/pnv.pdf', 'F');
        return new BinaryFileResponse(sys_get_temp_dir() . '/pnv.pdf');

    }

    public function tickethtmlAction(Participation $participation)
    {
        return $this->render('EloboostedFrontofficeBundle:participation:ticket.html.twig', array('p' => $participation));
    }

    public function setwinnersAction(Request $request ,Tournoi $tournoi)
    {
        $em = $this->getDoctrine()->getManager();
        $participates = $em->getRepository('EloboostedGameinjectionBundle:Participation')->findBy(array('idTournoiPart'=>$tournoi));
        if ($request->isMethod('POST'))
        {
            $win1 =$em->getRepository('EloboostedGameinjectionBundle:Participation')->find($request->get('winner1'));
            $win2 =$em->getRepository('EloboostedGameinjectionBundle:Participation')->find($request->get('winner2'));
            $win3 =$em->getRepository('EloboostedGameinjectionBundle:Participation')->find($request->get('winner3'));
            $win1->setPositionWin(1);
            $win2->setPositionWin(2);
            $win3->setPositionWin(3);
            $winner1 = $win1->getIdComptePart();
            $winner2 = $win2->getIdComptePart();
            $winner3 = $win3->getIdComptePart();
            $winner1->setPoints($winner1->getPoints()+ $tournoi->getReward1());
            $winner2->setPoints($winner2->getPoints()+ $tournoi->getReward2());
            $winner3->setPoints($winner3->getPoints()+ $tournoi->getReward3());
            $em->persist($winner1);
            $em->persist($winner2);
            $em->persist($winner3);

            $em->persist($win1);
            $em->persist($win2);
            $em->persist($win3);
            $em->flush();
            return $this->redirectToRoute('tournoi_show',array('id'=>$tournoi->getIdTournoi()));

        }
        return $this->render('EloboostedFrontofficeBundle:participation:winners.html.twig',array('participations'=>$participates));

    }


}
