<?php

namespace Eloboosted\GameinjectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TCategorie
 *
 * @ORM\Table(name="t_categorie")
 * @ORM\Entity
 */
class TCategorie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_categorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_categorie", type="string", length=255, nullable=false)
     */
    private $nomCategorie;

    /**
     * @return int
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * @param int $idCategorie
     */
    public function setIdCategorie($idCategorie)
    {
        $this->idCategorie = $idCategorie;
    }

    /**
     * @return string
     */
    public function getNomCategorie()
    {
        return $this->nomCategorie;
    }

    /**
     * @param string $nomCategorie
     */
    public function setNomCategorie($nomCategorie)
    {
        $this->nomCategorie = $nomCategorie;
    }


}

