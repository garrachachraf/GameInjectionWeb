<?php

namespace Eloboosted\GameinjectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tournoi
 *
 * @ORM\Table(name="tournoi")
 * @ORM\Entity
 */
class Tournoi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tournoi", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTournoi;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="datetime", nullable=false)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="datetime", nullable=false)
     */
    private $endDate;

    /**
     * @var float
     *
     * @ORM\Column(name="reward1", type="float", precision=10, scale=0, nullable=false)
     */
    private $reward1;

    /**
     * @var float
     *
     * @ORM\Column(name="reward2", type="float", precision=10, scale=0, nullable=false)
     */
    private $reward2;

    /**
     * @var float
     *
     * @ORM\Column(name="reward3", type="float", precision=10, scale=0, nullable=false)
     */
    private $reward3;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_par_joueur", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixParJoueur;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_joueur", type="integer", nullable=false)
     */
    private $nbrJoueur;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat=1;

    /**
     * @var string
     *
     * @ORM\Column(name="image_tournoi", type="blob", nullable=false)
     */
    private $imageTournoi;

    /**
     * @var \Compte
     *
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_compte_trn", referencedColumnName="id_compte")
     * })
     */
    private $idCompteTrn;

    /**
     * @var \Gamelist
     *
     * @ORM\ManyToOne(targetEntity="Gamelist")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_gamelist_trn", referencedColumnName="id_game")
     * })
     */
    private $idGameTrn;

    /**
     * Tournoi constructor.
     * @param \DateTime $startDate
     * @param \DateTime $endDate
     */
    public function __construct()
    {
        $this->startDate =  new \DateTime();
        $this->endDate =  new \DateTime();
    }

    /**
     * @return int
     */
    public function getIdTournoi()
    {
        return $this->idTournoi;
    }

    /**
     * @param int $idTournoi
     */
    public function setIdTournoi($idTournoi)
    {
        $this->idTournoi = $idTournoi;
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
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return float
     */
    public function getReward1()
    {
        return $this->reward1;
    }

    /**
     * @param float $reward1
     */
    public function setReward1($reward1)
    {
        $this->reward1 = $reward1;
    }

    /**
     * @return float
     */
    public function getReward2()
    {
        return $this->reward2;
    }

    /**
     * @param float $reward2
     */
    public function setReward2($reward2)
    {
        $this->reward2 = $reward2;
    }

    /**
     * @return float
     */
    public function getReward3()
    {
        return $this->reward3;
    }

    /**
     * @param float $reward3
     */
    public function setReward3($reward3)
    {
        $this->reward3 = $reward3;
    }

    /**
     * @return float
     */
    public function getPrixParJoueur()
    {
        return $this->prixParJoueur;
    }

    /**
     * @param float $prixParJoueur
     */
    public function setPrixParJoueur($prixParJoueur)
    {
        $this->prixParJoueur = $prixParJoueur;
    }

    /**
     * @return int
     */
    public function getNbrJoueur()
    {
        return $this->nbrJoueur;
    }

    /**
     * @param int $nbrJoueur
     */
    public function setNbrJoueur($nbrJoueur)
    {
        $this->nbrJoueur = $nbrJoueur;
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
     * @return string
     */
    public function getImageTournoi()
    {
        if ($this->imageTournoi != null) {


            return base64_encode(@stream_get_contents($this->imageTournoi));
        }

    }

    /**
     * @param string $imageTournoi
     */
    public function setImageTournoi($imageTournoi)
    {
        if ($imageTournoi != null) {

            $this->imageTournoi = @file_get_contents($imageTournoi);
        }

    }

    /**
     * @return \Compte
     */
    public function getIdCompteTrn()
    {
        return $this->idCompteTrn;
    }

    /**
     * @param \Compte $idCompteTrn
     */
    public function setIdCompteTrn($idCompteTrn)
    {
        $this->idCompteTrn = $idCompteTrn;
    }

    /**
     * @return \Gamelist
     */
    public function getIdGameTrn()
    {
        return $this->idGameTrn;
    }

    /**
     * @param \Gamelist $idGameTrn
     */
    public function setIdGameTrn($idGameTrn)
    {
        $this->idGameTrn = $idGameTrn;
    }


}

