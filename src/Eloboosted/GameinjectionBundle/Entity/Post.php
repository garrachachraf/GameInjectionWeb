<?php

namespace Eloboosted\GameinjectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post", indexes={@ORM\Index(name="cathegorie_specifique", columns={"cathegorie_specifique"}), @ORM\Index(name="id_compte", columns={"id_compte_post"})})
 * @ORM\Entity
 */
class Post
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_post", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPost;

    /**
     * @var string
     *
     * @ORM\Column(name="sujet", type="string", length=255, nullable=false)
     */
    private $sujet;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=50, nullable=false)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var \Cathegorie
     *
     * @ORM\ManyToOne(targetEntity="Cathegorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cathegorie_specifique", referencedColumnName="id")
     * })
     */
    private $cathegorieSpecifique;

    /**
     * @var \Compte
     *
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_compte_post", referencedColumnName="id_compte")
     * })
     */
    private $idComptePost;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Compte", inversedBy="idPostRate")
     * @ORM\JoinTable(name="post_rate",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_post_rate", referencedColumnName="id_post")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_compte_rate", referencedColumnName="id_compte")
     *   }
     * )
     */
    private $idCompteRate;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Compte", mappedBy="idPostRl")
     */
    private $idCompteRl;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCompteRate = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idCompteRl = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getIdPost()
    {
        return $this->idPost;
    }

    /**
     * @param int $idPost
     */
    public function setIdPost($idPost)
    {
        $this->idPost = $idPost;
    }

    /**
     * @return string
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * @param string $sujet
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;
    }

    /**
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
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
     * @return \Cathegorie
     */
    public function getCathegorieSpecifique()
    {
        return $this->cathegorieSpecifique;
    }

    /**
     * @param \Cathegorie $cathegorieSpecifique
     */
    public function setCathegorieSpecifique($cathegorieSpecifique)
    {
        $this->cathegorieSpecifique = $cathegorieSpecifique;
    }

    /**
     * @return \Compte
     */
    public function getIdComptePost()
    {
        return $this->idComptePost;
    }

    /**
     * @param \Compte $idComptePost
     */
    public function setIdComptePost($idComptePost)
    {
        $this->idComptePost = $idComptePost;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdCompteRate()
    {
        return $this->idCompteRate;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idCompteRate
     */
    public function setIdCompteRate($idCompteRate)
    {
        $this->idCompteRate = $idCompteRate;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdCompteRl()
    {
        return $this->idCompteRl;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idCompteRl
     */
    public function setIdCompteRl($idCompteRl)
    {
        $this->idCompteRl = $idCompteRl;
    }

}

