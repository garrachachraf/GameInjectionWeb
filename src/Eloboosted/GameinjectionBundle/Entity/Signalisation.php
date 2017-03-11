<?php

namespace Eloboosted\GameinjectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Signalisation
 *
 * @ORM\Table(name="signalisation", indexes={@ORM\Index(name="signalisation_ibfk_1", columns={"id_commentaire_sng"}), @ORM\Index(name="signalisation_ibfk_2", columns={"id_post_sng"}), @ORM\Index(name="signalisation_ibfk_3", columns={"id_compte_sng"}), @ORM\Index(name="id_signalisation", columns={"id_signalisation"})})
 * @ORM\Entity
 */
class Signalisation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_signalisation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSignalisation;

    /**
     * @var \CommentairePost
     *
     * @ORM\ManyToOne(targetEntity="CommentairePost")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_commentaire_sng", referencedColumnName="id_commentaire")
     * })
     */
    private $idCommentaireSng;

    /**
     * @var \Post
     *
     * @ORM\ManyToOne(targetEntity="Post")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_post_sng", referencedColumnName="id_post")
     * })
     */
    private $idPostSng;

    /**
     * @var \Compte
     *
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_compte_sng", referencedColumnName="id_compte")
     * })
     */
    private $idCompteSng;

    /**
     * @return int
     */
    public function getIdSignalisation()
    {
        return $this->idSignalisation;
    }

    /**
     * @param int $idSignalisation
     */
    public function setIdSignalisation($idSignalisation)
    {
        $this->idSignalisation = $idSignalisation;
    }

    /**
     * @return \CommentairePost
     */
    public function getIdCommentaireSng()
    {
        return $this->idCommentaireSng;
    }

    /**
     * @param \CommentairePost $idCommentaireSng
     */
    public function setIdCommentaireSng($idCommentaireSng)
    {
        $this->idCommentaireSng = $idCommentaireSng;
    }

    /**
     * @return \Post
     */
    public function getIdPostSng()
    {
        return $this->idPostSng;
    }

    /**
     * @param \Post $idPostSng
     */
    public function setIdPostSng($idPostSng)
    {
        $this->idPostSng = $idPostSng;
    }

    /**
     * @return \Compte
     */
    public function getIdCompteSng()
    {
        return $this->idCompteSng;
    }

    /**
     * @param \Compte $idCompteSng
     */
    public function setIdCompteSng($idCompteSng)
    {
        $this->idCompteSng = $idCompteSng;
    }


}

