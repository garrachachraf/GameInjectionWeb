<?php

namespace Eloboosted\GameinjectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Compte
 *
 * @ORM\Table(name="compte")
 * @ORM\Entity
 */
class Compte  implements UserInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_compte", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCompte;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=false)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_de_naissance", type="date", nullable=false)
     */
    private $dateDeNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=30, nullable=false)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="mot_de_passe", type="string", length=32, nullable=false)
     */
    private $motDePasse;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat;

    /**
     * @var integer
     *
     * @ORM\Column(name="points", type="integer", nullable=false)
     */
    private $points;

    /**
     * @var integer
     *
     * @ORM\Column(name="rank", type="integer", nullable=false)
     */
    private $rank;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="blob", nullable=true)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_de_signalisation", type="integer", nullable=false)
     */
    private $nombreDeSignalisation;

    /**
     * @var integer
     *
     * @ORM\Column(name="archive", type="integer", nullable=false)
     */
    private $archive = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="tel_num", type="integer", nullable=true)
     */
    private $telNum;

    /**
     * @var integer
     *
     * @ORM\Column(name="admin", type="integer", nullable=false)
     */
    private $admin = '0';

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Compte", inversedBy="idCompte1La")
     * @ORM\JoinTable(name="list_ami",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_compte_1_la", referencedColumnName="id_compte")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_compte_2_la", referencedColumnName="id_compte")
     *   }
     * )
     */
    private $idCompte2La;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Post", mappedBy="idCompteRate")
     */
    private $idPostRate;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Post", inversedBy="idCompteRl")
     * @ORM\JoinTable(name="read_later",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_compte_rl", referencedColumnName="id_compte")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_post_rl", referencedColumnName="id_post")
     *   }
     * )
     */
    private $idPostRl;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CathegorieRequest", mappedBy="idCompteRv")
     */
    private $idRequest;

    /**
     * Constructor
     */
    public
    /**
     *
     */
    function __construct()
    {
        $this->idCompte2La = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idPostRate = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idPostRl = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idRequest = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public
    /**
     * @return mixed
     */
    function getIdCompte()
    {
        return $this->idCompte;
    }

    /**
     * @param int $idCompte
     */
    public
    /**
     * @param int $idCompte
     */
    function setIdCompte($idCompte)
    {
        $this->idCompte = $idCompte;
    }

    /**
     * @return string
     */
    public
    /**
     * @return mixed
     */
    function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public
    /**
     * @param string $nom
     */
    function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public
    /**
     * @return mixed
     */
    function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public
    /**
     * @param string $prenom
     */
    function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return \DateTime
     */
    public
    /**
     * @return mixed
     */
    function getDateDeNaissance()
    {
        return $this->dateDeNaissance;
    }

    /**
     * @param \DateTime $dateDeNaissance
     */
    public
    /**
     * @param \DateTime $dateDeNaissance
     */
    function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = $dateDeNaissance;
    }

    /**
     * @return string
     */
    public
    /**
     * @return mixed
     */
    function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public
    /**
     * @param string $email
     */
    function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public
    /**
     * @return mixed
     */
    function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param string $pseudo
     */
    public
    /**
     * @param string $pseudo
     */
    function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return string
     */
    public
    /**
     * @return mixed
     */
    function getMotDePasse()
    {
        return $this->motDePasse;
    }

    /**
     * @param string $motDePasse
     */
    public
    /**
     * @param string $motDePasse
     */
    function setMotDePasse($motDePasse)
    {
        $this->motDePasse = $motDePasse;
    }

    /**
     * @return int
     */
    public
    /**
     * @return mixed
     */
    function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param int $etat
     */
    public
    /**
     * @param int $etat
     */
    function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return int
     */
    public
    /**
     * @return mixed
     */
    function getPoints()
    {
        return $this->points;
    }

    /**
     * @param int $points
     */
    public
    /**
     * @param int $points
     */
    function setPoints($points)
    {
        $this->points = $points;
    }

    /**
     * @return int
     */
    public
    /**
     * @return mixed
     */
    function getRank()
    {
        return $this->rank;
    }

    /**
     * @param int $rank
     */
    public
    /**
     * @param int $rank
     */
    function setRank($rank)
    {
        $this->rank = $rank;
    }

    /**
     * @return string
     */
    public
    /**
     * @return mixed
     */
    function getImage()
    {
        $images= base64_encode(stream_get_contents($this->image));
        return "data:image/png;base64,".$images;
    }

    /**
     * @param string $image
     */
    public
    /**
     * @param string $image
     */
    function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return int
     */
    public
    /**
     * @return mixed
     */
    function getNombreDeSignalisation()
    {
        return $this->nombreDeSignalisation;
    }

    /**
     * @param int $nombreDeSignalisation
     */
    public
    /**
     * @param int $nombreDeSignalisation
     */
    function setNombreDeSignalisation($nombreDeSignalisation)
    {
        $this->nombreDeSignalisation = $nombreDeSignalisation;
    }

    /**
     * @return int
     */
    public
    /**
     * @return mixed
     */
    function getArchive()
    {
        return $this->archive;
    }

    /**
     * @param int $archive
     */
    public
    /**
     * @param int $archive
     */
    function setArchive($archive)
    {
        $this->archive = $archive;
    }

    /**
     * @return int
     */
    public
    /**
     * @return mixed
     */
    function getTelNum()
    {
        return $this->telNum;
    }

    /**
     * @param int $telNum
     */
    public
    /**
     * @param int $telNum
     */
    function setTelNum($telNum)
    {
        $this->telNum = $telNum;
    }

    /**
     * @return int
     */
    public
    /**
     * @return mixed
     */
    function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param int $admin
     */
    public
    /**
     * @param int $admin
     */
    function setAdmin($admin)
    {
        $this->admin = $admin;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public
    /**
     * @return mixed
     */
    function getIdCompte2La()
    {
        return $this->idCompte2La;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idCompte2La
     */
    public
    /**
     * @param \Doctrine\Common\Collections\Collection $idCompte2La
     */
    function setIdCompte2La($idCompte2La)
    {
        $this->idCompte2La = $idCompte2La;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public
    /**
     * @return mixed
     */
    function getIdPostRate()
    {
        return $this->idPostRate;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idPostRate
     */
    public
    /**
     * @param \Doctrine\Common\Collections\Collection $idPostRate
     */
    function setIdPostRate($idPostRate)
    {
        $this->idPostRate = $idPostRate;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public
    /**
     * @return mixed
     */
    function getIdPostRl()
    {
        return $this->idPostRl;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idPostRl
     */
    public
    /**
     * @param \Doctrine\Common\Collections\Collection $idPostRl
     */
    function setIdPostRl($idPostRl)
    {
        $this->idPostRl = $idPostRl;
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public
    /**
     * @return mixed
     */
    function getIdRequest()
    {
        return $this->idRequest;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $idRequest
     */
    public
    /**
     * @param \Doctrine\Common\Collections\Collection $idRequest
     */
    function setIdRequest($idRequest)
    {
        $this->idRequest = $idRequest;
    }

    public function getRoles()
    {
        if ($this->getAdmin()==1){
            return array('ROLE_ADMIN');
        }
        if ($this->getAdmin()==0){
            return array('ROLE_USER');
        }
    }

    public function getPassword()
    {
        return $this->getMotDePasse();
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function getUsername()
    {
        return $this->getPseudo();
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

}

