<?php

namespace Eloboosted\GameinjectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Listjaime
 *
 * @ORM\Table(name="listjaime", indexes={@ORM\Index(name="id_commentaire", columns={"id_commentaire_lj"}), @ORM\Index(name="id_compte", columns={"id_compte_lj"})})
 * @ORM\Entity
 */
class Listjaime
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_like", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLike;

    /**
     * @var \Compte
     *
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_compte_lj", referencedColumnName="id_compte")
     * })
     */
    private $idCompteLj;

    /**
     * @var \CommentairePost
     *
     * @ORM\ManyToOne(targetEntity="CommentairePost")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_commentaire_lj", referencedColumnName="id_commentaire")
     * })
     */
    private $idCommentaireLj;

    /**
     * @return int
     */
    public function getIdLike()
    {
        return $this->idLike;
    }

    /**
     * @param int $idLike
     */
    public function setIdLike($idLike)
    {
        $this->idLike = $idLike;
    }

    /**
     * @return \Compte
     */
    public function getIdCompteLj()
    {
        return $this->idCompteLj;
    }

    /**
     * @param \Compte $idCompteLj
     */
    public function setIdCompteLj($idCompteLj)
    {
        $this->idCompteLj = $idCompteLj;
    }

    /**
     * @return \CommentairePost
     */
    public function getIdCommentaireLj()
    {
        return $this->idCommentaireLj;
    }

    /**
     * @param \CommentairePost $idCommentaireLj
     */
    public function setIdCommentaireLj($idCommentaireLj)
    {
        $this->idCommentaireLj = $idCommentaireLj;
    }

}

