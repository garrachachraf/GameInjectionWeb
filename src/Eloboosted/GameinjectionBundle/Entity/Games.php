<?php

namespace Eloboosted\GameinjectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Games
 *
 * @ORM\Table(name="games", indexes={@ORM\Index(name="id_games", columns={"id_games"}), @ORM\Index(name="id_cathegorie", columns={"id_cathegorieg"})})
 * @ORM\Entity
 */
class Games
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_games", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGames;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_games", type="string", length=255, nullable=false)
     */
    private $nomGames;

    /**
     * @var string
     *
     * @ORM\Column(name="Image_games", type="string", length=255, nullable=false)
     */
    private $imageGames;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="supported", type="string", length=255, nullable=false)
     */
    private $supported;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var \Cathegorie
     *
     * @ORM\ManyToOne(targetEntity="Cathegorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cathegorieg", referencedColumnName="id")
     * })
     */
    private $idCathegorieg;

    /**
     * @return int
     */
    public function getIdGames()
    {
        return $this->idGames;
    }

    /**
     * @param int $idGames
     */
    public function setIdGames($idGames)
    {
        $this->idGames = $idGames;
    }

    /**
     * @return string
     */
    public function getNomGames()
    {
        return $this->nomGames;
    }

    /**
     * @param string $nomGames
     */
    public function setNomGames($nomGames)
    {
        $this->nomGames = $nomGames;
    }

    /**
     * @return string
     */
    public function getImageGames()
    {
        return $this->imageGames;
    }

    /**
     * @param string $imageGames
     */
    public function setImageGames($imageGames)
    {
        $this->imageGames = $imageGames;
    }

    /**
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param int $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return string
     */
    public function getSupported()
    {
        return $this->supported;
    }

    /**
     * @param string $supported
     */
    public function setSupported($supported)
    {
        $this->supported = $supported;
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
     * @return \Cathegorie
     */
    public function getIdCathegorieg()
    {
        return $this->idCathegorieg;
    }

    /**
     * @param \Cathegorie $idCathegorieg
     */
    public function setIdCathegorieg($idCathegorieg)
    {
        $this->idCathegorieg = $idCathegorieg;
    }


}

