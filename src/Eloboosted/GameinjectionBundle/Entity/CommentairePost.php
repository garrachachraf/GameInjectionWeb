<?php

namespace Eloboosted\GameinjectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentairePost
 *
 * @ORM\Table(name="commentaire_post", indexes={@ORM\Index(name="id_post", columns={"id_post_cp", "id_compte_cp"}), @ORM\Index(name="id_compte", columns={"id_compte_cp"}), @ORM\Index(name="IDX_B372A8DF752196AB", columns={"id_post_cp"})})
 * @ORM\Entity
 */
class CommentairePost
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_commentaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommentaire;

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
     * @var integer
     *
     * @ORM\Column(name="marqueSolution", type="integer", nullable=false)
     */
    private $marquesolution = '0';

    /**
     * @var \Compte
     *
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_compte_cp", referencedColumnName="id_compte")
     * })
     */
    private $idCompteCp;

    /**
     * @var \Post
     *
     * @ORM\ManyToOne(targetEntity="Post")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_post_cp", referencedColumnName="id_post")
     * })
     */
    private $idPostCp;

    /**
     * @return int
     */
    public function getIdCommentaire()
    {
        return $this->idCommentaire;
    }

    /**
     * @param int $idCommentaire
     */
    public function setIdCommentaire($idCommentaire)
    {
        $this->idCommentaire = $idCommentaire;
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
     * @return int
     */
    public function getMarquesolution()
    {
        return $this->marquesolution;
    }

    /**
     * @param int $marquesolution
     */
    public function setMarquesolution($marquesolution)
    {
        $this->marquesolution = $marquesolution;
    }

    /**
     * @return \Compte
     */
    public function getIdCompteCp()
    {
        return $this->idCompteCp;
    }

    /**
     * @param \Compte $idCompteCp
     */
    public function setIdCompteCp($idCompteCp)
    {
        $this->idCompteCp = $idCompteCp;
    }

    /**
     * @return \Post
     */
    public function getIdPostCp()
    {
        return $this->idPostCp;
    }

    /**
     * @param \Post $idPostCp
     */
    public function setIdPostCp($idPostCp)
    {
        $this->idPostCp = $idPostCp;
    }


}

