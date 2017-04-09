<?php

namespace Eloboosted\FrontofficeBundle\Controller;

use Eloboosted\GameinjectionBundle\Entity\Tournoi;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TournoiController extends Controller
{
    /**
     * Lists all tournoi entities.
     *
     */
    public function indexAction($p, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $game = $request->get('games');
        $sortby = $request->get('sortedBy');
        $sort = array();
        if ($sortby !=null)
        {
            if ($sortby=='Date')
            {
                $sort = array('startDate'=>'asc');
            }
            elseif ($sortby=='Name')
            {
                $sort = array('nom'=>'asc');
            }
            elseif ($sortby=='Fees')
            {
                $sort = array('prixParJoueur'=>'asc');
            }
        }
        if ($game != null)
        {
            $thegame = $em->getRepository('EloboostedGameinjectionBundle:Gamelist')->find($game);
            $tournois = $em->getRepository('EloboostedGameinjectionBundle:Tournoi')->findBy(array('idGameTrn'=>$thegame),$sort);
        }
        else
        {
            $tournois = $em->getRepository('EloboostedGameinjectionBundle:Tournoi')->findBy(array(),$sort);
        }
        $countt = count($tournois);
        $start = 3 * ($p - 1);
        if ($p == 1) {
            $start = 0;
        }
        $end = 3 * $p;
        $nb = ceil($countt / 3);
        $tournois = array_slice($tournois, $start, $end);
        $games = $em->getRepository('EloboostedGameinjectionBundle:Gamelist')->findAll();

        return $this->render('EloboostedFrontofficeBundle:tournoi:index.html.twig', array(
            'tournois' => $tournois,
            'pages' => $nb,
            'p' => $p,
            'games' => $games
        ));
    }

    public function serachtournamentAction(Request $request)
    {
        $word = $request->get('word');
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            'SELECT t
    FROM EloboostedGameinjectionBundle:Tournoi t
    WHERE t.nom LIKE :word'
        )->setParameter('word', '%' . $word . '%');

        $tournois = $query->getResult();

        return $this->render('EloboostedFrontofficeBundle:tournoi:SearchTournament.html.twig', array(
            'tournois' => $tournois,

        ));

    }

    /**
     * Creates a new tournoi entity.
     *
     */
    public function newAction(Request $request)
    {
        $tournoi = new Tournoi();
        $form = $this->createForm('Eloboosted\FrontofficeBundle\Form\TournoiType', $tournoi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $tournoi->setIdCompteTrn($this->get('security.token_storage')->getToken()->getUser());
            $em->persist($tournoi);
            $em->flush($tournoi);

            return $this->redirectToRoute('tournoi_show', array('id' => $tournoi->getIdTournoi()));
        }

        return $this->render('EloboostedFrontofficeBundle:tournoi:new.html.twig', array(
            'tournoi' => $tournoi,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tournoi entity.
     *
     */
    public function showAction(Tournoi $tournoi)
    {
        $deleteForm = $this->createDeleteForm($tournoi);
        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $participation = $em->getRepository('EloboostedGameinjectionBundle:Participation')->findOneBy(array('idComptePart' => $user, 'idTournoiPart' => $tournoi));
        $isParticipated = 0;
        if ($participation) {
            $isParticipated = 1;
        }
        $participations = $em->getRepository('EloboostedGameinjectionBundle:Participation')->findBy(array('idTournoiPart' => $tournoi));
        $nbp = count($participations);
        $comments = $em->getRepository('EloboostedGameinjectionBundle:CommentaireTournoi')->findBy(array('idTournoiCt' => $tournoi));
        return $this->render('EloboostedFrontofficeBundle:tournoi:show.html.twig', array(
            'tournoi' => $tournoi,
            'delete_form' => $deleteForm->createView(),
            'comments' => $comments,
            'isparticipated' => $isParticipated,
            'participation' => $participation,
            'nbp' => $nbp,
        ));
    }

    /**
     * Creates a form to delete a tournoi entity.
     *
     * @param Tournoi $tournoi The tournoi entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tournoi $tournoi)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tournoi_delete', array('id' => $tournoi->getIdTournoi())))
            ->setMethod('DELETE')
            ->getForm();
    }

    /**
     * Displays a form to edit an existing tournoi entity.
     *
     */
    public function editAction(Request $request, Tournoi $tournoi)
    {
        $deleteForm = $this->createDeleteForm($tournoi);
        $editForm = $this->createForm('Eloboosted\FrontofficeBundle\Form\TournoiType', $tournoi);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            if ($tournoi->getStartDate() < $tournoi->getEndDate()) {

                $this->getDoctrine()->getManager()->flush();

                return $this->redirectToRoute('tournoi_edit', array('id' => $tournoi->getIdTournoi()));
            } else {
                return $this->render('EloboostedFrontofficeBundle:tournoi:edit.html.twig', array(
                    'tournoi' => $tournoi,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                    'erreur' => 'erreur date'
                ));
            }
        }

        return $this->render('EloboostedFrontofficeBundle:tournoi:edit.html.twig', array(
            'tournoi' => $tournoi,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'erreur' => null
        ));
    }

    /**
     * Deletes a tournoi entity.
     *
     */
    public function deleteAction( Tournoi $tournoi)
    {



            $em = $this->getDoctrine()->getManager();
            $em->remove($tournoi);
            $em->flush($tournoi);


        return $this->redirectToRoute('tournoi_index');
    }


}

