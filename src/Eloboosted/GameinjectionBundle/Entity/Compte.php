<?php

namespace Eloboosted\GameinjectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Cunningsoft\ChatBundle\Entity\AuthorInterface;

/**
 * Compte
 *
 * @ORM\Table(name="compte")
 * @ORM\Entity(repositoryClass="Eloboosted\GameinjectionBundle\Entity\CompteRepository")
 */
class Compte  implements UserInterface,AuthorInterface
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
        $images= base64_encode(@stream_get_contents($this->image,-1,0));
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
        $this->image = file_get_contents($image);
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

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->pseudo;
    }
}

