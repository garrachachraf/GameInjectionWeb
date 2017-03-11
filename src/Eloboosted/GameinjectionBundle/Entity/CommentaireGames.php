<?php

namespace Eloboosted\GameinjectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommentaireGames
 *
 * @ORM\Table(name="commentaire_games", uniqueConstraints={@ORM\UniqueConstraint(name="id_commentaire_2", columns={"id_commentaire"})}, indexes={@ORM\Index(name="id_commentaire", columns={"id_commentaire"}), @ORM\Index(name="id_games", columns={"id_games_commentaire"}), @ORM\Index(name="id_compte", columns={"id_cgc"})})
 * @ORM\Entity
 */
class CommentaireGames
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbjaime", type="integer", nullable=false)
     */
    private $nbjaime;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255, nullable=false)
     */
    private $contenu;

    /**
     * @var \Games
     *
     * @ORM\ManyToOne(targetEntity="Games")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_games_commentaire", referencedColumnName="id_games")
     * })
     */
    private $idGamesCommentaire;

    /**
     * @var \Compte
     *
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cgc", referencedColumnName="id_compte")
     * })
     */
    private $idCgc;

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
    public function getNbjaime()
    {
        return $this->nbjaime;
    }

    /**
     * @param int $nbjaime
     */
    public function setNbjaime($nbjaime)
    {
        $this->nbjaime = $nbjaime;
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
     * @return \Games
     */
    public function getIdGamesCommentaire()
    {
        return $this->idGamesCommentaire;
    }

    /**
     * @param \Games $idGamesCommentaire
     */
    public function setIdGamesCommentaire($idGamesCommentaire)
    {
        $this->idGamesCommentaire = $idGamesCommentaire;
    }

    /**
     * @return \Compte
     */
    public function getIdCgc()
    {
        return $this->idCgc;
    }

    /**
     * @param \Compte $idCgc
     */
    public function setIdCgc($idCgc)
    {
        $this->idCgc = $idCgc;
    }


}

