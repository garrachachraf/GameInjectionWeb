<?php

namespace Eloboosted\GameinjectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TProduit
 *
 * @ORM\Table(name="t_produit", indexes={@ORM\Index(name="id_categorie", columns={"id_categorie_prod", "id_compte_prod"}), @ORM\Index(name="id_compte", columns={"id_compte_prod"}), @ORM\Index(name="IDX_73895444FFFB2BC6", columns={"id_categorie_prod"})})
 * @ORM\Entity
 */
class TProduit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_produit", type="string", length=255, nullable=false)
     */
    private $libelleProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="description_produit", type="string", length=255, nullable=false)
     */
    private $descriptionProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="marque_produit", type="string", length=255, nullable=false)
     */
    private $marqueProduit;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_produit", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixProduit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_produit", type="datetime", nullable=false)
     */
    private $dateProduit = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="Etat", type="string", length=255, nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="img_produit", type="blob", nullable=false)
     */
    private $imgProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="image_produit_2", type="blob", nullable=true)
     */
    private $imageProduit2;

    /**
     * @var string
     *
     * @ORM\Column(name="image_produit_3", type="blob", nullable=true)
     */
    private $imageProduit3;

    /**
     * @var string
     *
     * @ORM\Column(name="score_produit", type="integer", nullable=true)
     */
    private $scoreproduit=0;

    /**
     * @return string
     */
    public function getScoreproduit()
    {
        return $this->scoreproduit;
    }

    /**
     * @param string $scoreproduit
     */
    public function setScoreproduit($scoreproduit)
    {
        $this->scoreproduit = $scoreproduit;
    }

    /**
     * @var \Compte
     *
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_compte_prod", referencedColumnName="id_compte")
     * })
     */
    private $idCompteProd;

    /**
     * @var \TCategorie
     *
     * @ORM\ManyToOne(targetEntity="TCategorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categorie_prod", referencedColumnName="id_categorie")
     * })
     */
    private $idCategorieProd;

    /**
     * @return int
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * @param int $idProduit
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;
    }

    /**
     * @return string
     */
    public function getLibelleProduit()
    {
        return $this->libelleProduit;
    }

    /**
     * @param string $libelleProduit
     */
    public function setLibelleProduit($libelleProduit)
    {
        $this->libelleProduit = $libelleProduit;
    }

    /**
     * @return string
     */
    public function getDescriptionProduit()
    {
        return $this->descriptionProduit;
    }

    /**
     * @param string $descriptionProduit
     */
    public function setDescriptionProduit($descriptionProduit)
    {
        $this->descriptionProduit = $descriptionProduit;
    }

    /**
     * @return string
     */
    public function getMarqueProduit()
    {
        return $this->marqueProduit;
    }

    /**
     * @param string $marqueProduit
     */
    public function setMarqueProduit($marqueProduit)
    {
        $this->marqueProduit = $marqueProduit;
    }

    /**
     * @return float
     */
    public function getPrixProduit()
    {
        return $this->prixProduit;
    }

    /**
     * @param float $prixProduit
     */
    public function setPrixProduit($prixProduit)
    {
        $this->prixProduit = $prixProduit;
    }

    /**
     * @return \DateTime
     */
    public function getDateProduit()
    {
        return $this->dateProduit;
    }

    /**
     * @param \DateTime $dateProduit
     */
    public function setDateProduit($dateProduit)
    {
        $this->dateProduit = $dateProduit;
    }

    /**
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param string $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return string
     */
    public function getImgProduit()
    {
        if ($this->imgProduit != null)
        {
            return base64_encode(@stream_get_contents($this->imgProduit)) ;
        }
    }

    /**
     * @param string $imgProduit
     */
    public function setImgProduit($imgProduit)
    {
        if ($imgProduit != null)
        {
            $this->imgProduit = @file_get_contents($imgProduit);
        }
    }

    /**
     * @return string
     */
    public function getImageProduit2()
    {
        if ($this->imageProduit2 != null)
        {
            return base64_encode(@stream_get_contents($this->imageProduit2)) ;
        }
    }

    /**
     * @param string $imageProduit2
     */
    public function setImageProduit2($imageProduit2)
    {
        if ($imageProduit2 != null)
        {
            $this->imageProduit2 = @file_get_contents($imageProduit2);
        }

    }

    /**
     * @return string
     */
    public function getImageProduit3()
    {
        if ($this->imageProduit3 != null)
        {
            return base64_encode(@stream_get_contents($this->imageProduit3)) ;
        }
    }

    /**
     * @param string $imageProduit3
     */
    public function setImageProduit3($imageProduit3)
    {
        if ($imageProduit3 != null)
        {
            $this->imageProduit3 = @file_get_contents($imageProduit3);
        }
    }

    /**
     * @return \Compte
     */
    public function getIdCompteProd()
    {
        return $this->idCompteProd;
    }

    /**
     * @param \Compte $idCompteProd
     */
    public function setIdCompteProd($idCompteProd)
    {
        $this->idCompteProd = $idCompteProd;
    }

    /**
     * @return \TCategorie
     */
    public function getIdCategorieProd()
    {
        return $this->idCategorieProd;
    }

    /**
     * @param \TCategorie $idCategorieProd
     */
    public function setIdCategorieProd($idCategorieProd)
    {
        $this->idCategorieProd = $idCategorieProd;
    }



}

