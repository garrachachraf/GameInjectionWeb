<?php

namespace Eloboosted\GameinjectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentaireTournoi
 *
 * @ORM\Table(name="commentaire_tournoi", indexes={@ORM\Index(name="id_tournoi", columns={"id_tournoi_ct"}), @ORM\Index(name="id_compte", columns={"id_compte_ct"})})
 * @ORM\Entity
 */
class CommentaireTournoi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_commentaireT", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommentairet;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255, nullable=false)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var \Compte
     *
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_compte_ct", referencedColumnName="id_compte")
     * })
     */
    private $idCompteCt;

    /**
     * @var \Tournoi
     *
     * @ORM\ManyToOne(targetEntity="Tournoi")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tournoi_ct", referencedColumnName="id_tournoi",nullable=false)
     * })
     */
    private $idTournoiCt;

    /**
     * CommentaireTournoi constructor.
     */
    public function __construct()
    {
        $this->date = new \DateTime();
    }

    /**
     * @return int
     */
    public function getIdCommentairet()
    {
        return $this->idCommentairet;
    }

    /**
     * @param int $idCommentairet
     */
    public function setIdCommentairet($idCommentairet)
    {
        $this->idCommentairet = $idCommentairet;
    }

    /**
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * @param string $contenu
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return \Compte
     */
    public function getIdCompteCt()
    {
        return $this->idCompteCt;
    }

    /**
     * @param \Compte $idCompteCt
     */
    public function setIdCompteCt($idCompteCt)
    {
        $this->idCompteCt = $idCompteCt;
    }

    /**
     * @return \Tournoi
     */
    public function getIdTournoiCt()
    {
        return $this->idTournoiCt;
    }

    /**
     * @param \Tournoi $idTournoiCt
     */
    public function setIdTournoiCt($idTournoiCt)
    {
        $this->idTournoiCt = $idTournoiCt;
    }


}

