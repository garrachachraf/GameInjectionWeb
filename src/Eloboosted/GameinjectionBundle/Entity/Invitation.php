<?php

namespace Eloboosted\GameinjectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitation
 *
 * @ORM\Table(name="invitation", indexes={@ORM\Index(name="emetteur", columns={"emetteur", "recepteur"}), @ORM\Index(name="recepteur", columns={"recepteur"}), @ORM\Index(name="IDX_F11D61A252127D6", columns={"emetteur"})})
 * @ORM\Entity
 */
class Invitation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_invitation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idInvitation;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=false)
     */
    private $etat;

    /**
     * @var \Compte
     *
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="emetteur", referencedColumnName="id_compte")
     * })
     */
    private $emetteur;

    /**
     * @var \Compte
     *
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recepteur", referencedColumnName="id_compte")
     * })
     */
    private $recepteur;

    /**
     * @return int
     */
    public function getIdInvitation()
    {
        return $this->idInvitation;
    }

    /**
     * @param int $idInvitation
     */
    public function setIdInvitation($idInvitation)
    {
        $this->idInvitation = $idInvitation;
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
    public function getEmetteur()
    {
        return $this->emetteur;
    }

    /**
     * @param \Compte $emetteur
     */
    public function setEmetteur($emetteur)
    {
        $this->emetteur = $emetteur;
    }

    /**
     * @return \Compte
     */
    public function getRecepteur()
    {
        return $this->recepteur;
    }

    /**
     * @param \Compte $recepteur
     */
    public function setRecepteur($recepteur)
    {
        $this->recepteur = $recepteur;
    }


}

