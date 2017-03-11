<?php

namespace Eloboosted\GameinjectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VoteProduct
 *
 * @ORM\Table(name="vote_product", indexes={@ORM\Index(name="id_compte", columns={"id_compte_vp"}), @ORM\Index(name="id_produit", columns={"id_produit_vp"})})
 * @ORM\Entity
 */
class VoteProduct
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_vote", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVote;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_vote", type="integer", nullable=false)
     */
    private $nombreVote;

    /**
     * @var \Compte
     *
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_compte_vp", referencedColumnName="id_compte")
     * })
     */
    private $idCompteVp;

    /**
     * @var \TProduit
     *
     * @ORM\ManyToOne(targetEntity="TProduit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produit_vp", referencedColumnName="id_produit")
     * })
     */
    private $idProduitVp;

    /**
     * @return int
     */
    public function getIdVote()
    {
        return $this->idVote;
    }

    /**
     * @param int $idVote
     */
    public function setIdVote($idVote)
    {
        $this->idVote = $idVote;
    }

    /**
     * @return int
     */
    public function getNombreVote()
    {
        return $this->nombreVote;
    }

    /**
     * @param int $nombreVote
     */
    public function setNombreVote($nombreVote)
    {
        $this->nombreVote = $nombreVote;
    }

    /**
     * @return \Compte
     */
    public function getIdCompteVp()
    {
        return $this->idCompteVp;
    }

    /**
     * @param \Compte $idCompteVp
     */
    public function setIdCompteVp($idCompteVp)
    {
        $this->idCompteVp = $idCompteVp;
    }

    /**
     * @return \TProduit
     */
    public function getIdProduitVp()
    {
        return $this->idProduitVp;
    }

    /**
     * @param \TProduit $idProduitVp
     */
    public function setIdProduitVp($idProduitVp)
    {
        $this->idProduitVp = $idProduitVp;
    }


}

