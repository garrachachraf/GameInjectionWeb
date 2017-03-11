<?php

namespace Eloboosted\GameinjectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CathegorieRequest
 *
 * @ORM\Table(name="cathegorie_request", indexes={@ORM\Index(name="id_compte", columns={"id_compte_voter"})})
 * @ORM\Entity
 */
class CathegorieRequest
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_request", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRequest;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    private $etat = '0';

    /**
     * @var \Compte
     *
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_compte_voter", referencedColumnName="id_compte")
     * })
     */
    private $idCompteVoter;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Compte", inversedBy="idRequest")
     * @ORM\JoinTable(name="request_vote",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_request", referencedColumnName="id_request")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_compte_rv", referencedColumnName="id_compte")
     *   }
     * )
     */
    private $idCompteRv;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCompteRv = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getIdRequest()
    {
        return $this->idRequest;
    }

    /**
     * @param int $idRequest
     */
    public function setIdRequest($idRequest)
    {
        $this->idRequest = $idRequest;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
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
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param int $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return \Compte
     */
    public function getIdCompteVoter()
    {
        return $this->idCompteVoter;
    }

    /**
     * @param \Compte $idCompteVoter
     */
    public function setIdCompteVoter($idCompteVoter)
    {
        $this->idCompteVoter = $idCompteVoter;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdCompteRv()
    {
        return $this->idCompteRv;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idCompteRv
     */
    public function setIdCompteRv($idCompteRv)
    {
        $this->idCompteRv = $idCompteRv;
    }

}

