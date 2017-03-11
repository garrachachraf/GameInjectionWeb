<?php

namespace Eloboosted\GameinjectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * JeuPost
 *
 * @ORM\Table(name="jeu_post", indexes={@ORM\Index(name="id_cathegorie", columns={"id_cathegorie_jp"})})
 * @ORM\Entity
 */
class JeuPost
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_game", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGame;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="blob", nullable=false)
     */
    private $image;

    /**
     * @var integer
     *
     * @ORM\Column(name="supporter", type="integer", nullable=false)
     */
    private $supporter = '0';

    /**
     * @var \Cathegorie
     *
     * @ORM\ManyToOne(targetEntity="Cathegorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cathegorie_jp", referencedColumnName="id")
     * })
     */
    private $idCathegorieJp;

    /**
     * @return int
     */
    public function getIdGame()
    {
        return $this->idGame;
    }

    /**
     * @param int $idGame
     */
    public function setIdGame($idGame)
    {
        $this->idGame = $idGame;
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
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return int
     */
    public function getSupporter()
    {
        return $this->supporter;
    }

    /**
     * @param int $supporter
     */
    public function setSupporter($supporter)
    {
        $this->supporter = $supporter;
    }

    /**
     * @return \Cathegorie
     */
    public function getIdCathegorieJp()
    {
        return $this->idCathegorieJp;
    }

    /**
     * @param \Cathegorie $idCathegorieJp
     */
    public function setIdCathegorieJp($idCathegorieJp)
    {
        $this->idCathegorieJp = $idCathegorieJp;
    }


}

