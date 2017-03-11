<?php

namespace Eloboosted\GameinjectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification", indexes={@ORM\Index(name="id_compte", columns={"id_compte_not"})})
 * @ORM\Entity
 */
class Notification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_notification", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNotification;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255, nullable=false)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_notification", type="datetime", nullable=false)
     */
    private $dateNotification;

    /**
     * @var integer
     *
     * @ORM\Column(name="vue", type="integer", nullable=false)
     */
    private $vue;

    /**
     * @var string
     *
     * @ORM\Column(name="notificationTitle", type="string", length=255, nullable=false)
     */
    private $notificationtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="imageN", type="string", length=255, nullable=true)
     */
    private $imagen;

    /**
     * @var integer
     *
     * @ORM\Column(name="message", type="integer", nullable=true)
     */
    private $message;

    /**
     * @var integer
     *
     * @ORM\Column(name="forum", type="integer", nullable=true)
     */
    private $forum;

    /**
     * @var integer
     *
     * @ORM\Column(name="invite", type="integer", nullable=true)
     */
    private $invite;

    /**
     * @var \Compte
     *
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_compte_not", referencedColumnName="id_compte")
     * })
     */
    private $idCompteNot;

    /**
     * @return int
     */
    public function getIdNotification()
    {
        return $this->idNotification;
    }

    /**
     * @param int $idNotification
     */
    public function setIdNotification($idNotification)
    {
        $this->idNotification = $idNotification;
    }

    /**
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * @param string $contenu
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    /**
     * @return \DateTime
     */
    public function getDateNotification()
    {
        return $this->dateNotification;
    }

    /**
     * @param \DateTime $dateNotification
     */
    public function setDateNotification($dateNotification)
    {
        $this->dateNotification = $dateNotification;
    }

    /**
     * @return int
     */
    public function getVue()
    {
        return $this->vue;
    }

    /**
     * @param int $vue
     */
    public function setVue($vue)
    {
        $this->vue = $vue;
    }

    /**
     * @return string
     */
    public function getNotificationtitle()
    {
        return $this->notificationtitle;
    }

    /**
     * @param string $notificationtitle
     */
    public function setNotificationtitle($notificationtitle)
    {
        $this->notificationtitle = $notificationtitle;
    }

    /**
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @param string $imagen
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    /**
     * @return int
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param int $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return int
     */
    public function getForum()
    {
        return $this->forum;
    }

    /**
     * @param int $forum
     */
    public function setForum($forum)
    {
        $this->forum = $forum;
    }

    /**
     * @return int
     */
    public function getInvite()
    {
        return $this->invite;
    }

    /**
     * @param int $invite
     */
    public function setInvite($invite)
    {
        $this->invite = $invite;
    }

    /**
     * @return \Compte
     */
    public function getIdCompteNot()
    {
        return $this->idCompteNot;
    }

    /**
     * @param \Compte $idCompteNot
     */
    public function setIdCompteNot($idCompteNot)
    {
        $this->idCompteNot = $idCompteNot;
    }


}

