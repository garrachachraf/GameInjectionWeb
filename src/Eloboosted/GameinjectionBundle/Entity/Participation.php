<?php

namespace Eloboosted\GameinjectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * v
 *
 * @ORM\Table(name="participation", uniqueConstraints={@ORM\UniqueConstraint(name="id_compte", columns={"id_compte_part"})}, indexes={@ORM\Index(name="id_tournoi", columns={"id_tournoi_part"})})
 * @ORM\Entity
 */
class Participation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_participation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idParticipation;

    /**
     * @var integer
     *
     * @ORM\Column(name="position_win", type="integer", nullable=true)
     */
    private $positionWin;

    /**
     * @var integer
     *
     * @ORM\Column(name="RKey", type="integer", nullable=false)
     */
    private $rkey;

    /**
     * @var \Compte
     *
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_compte_part", referencedColumnName="id_compte")
     * })
     */
    private $idComptePart;

    /**
     * @var \Tournoi
     *
     * @ORM\ManyToOne(targetEntity="Tournoi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tournoi_part", referencedColumnName="id_tournoi")
     * })
     */
    private $idTournoiPart;

    /**
     * @return int
     */
    public function getIdParticipation()
    {
        return $this->idParticipation;
    }

    /**
     * @param int $idParticipation
     */
    public function setIdParticipation($idParticipation)
    {
        $this->idParticipation = $idParticipation;
    }

    /**
     * @return int
     */
    public function getPositionWin()
    {
        return $this->positionWin;
    }

    /**
     * @param int $positionWin
     */
    public function setPositionWin($positionWin)
    {
        $this->positionWin = $positionWin;
    }

    /**
     * @return int
     */
    public function getRkey()
    {
        return $this->rkey;
    }

    /**
     * @param int $rkey
     */
    public function setRkey($rkey)
    {
        $this->rkey = $rkey;
    }

    /**
     * @return \Compte
     */
    public function getIdComptePart()
    {
        return $this->idComptePart;
    }

    /**
     * @param \Compte $idComptePart
     */
    public function setIdComptePart($idComptePart)
    {
        $this->idComptePart = $idComptePart;
    }

    /**
     * @return \Tournoi
     */
    public function getIdTournoiPart()
    {
        return $this->idTournoiPart;
    }

    /**
     * @param \Tournoi $idTournoiPart
     */
    public function setIdTournoiPart($idTournoiPart)
    {
        $this->idTournoiPart = $idTournoiPart;
    }


}

