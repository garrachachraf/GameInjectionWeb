<?php

namespace Eloboosted\GameinjectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TEvenement
 *
 * @ORM\Table(name="t_evenement", indexes={@ORM\Index(name="type_event", columns={"type_event"})})
 * @ORM\Entity
 */
class TEvenement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_evenement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=255, nullable=false)
     */
    private $note;

    /**
     * @var string
     *
     * @ORM\Column(name="lien", type="string", length=255, nullable=false)
     */
    private $lien;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_event", type="date", nullable=true)
     */
    private $dateEvent;

    /**
     * @var \TypeEvent
     *
     * @ORM\ManyToOne(targetEntity="TypeEvent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_event", referencedColumnName="id_event")
     * })
     */
    private $typeEvent;

    /**
     * @return int
     */
    public function getIdEvenement()
    {
        return $this->idEvenement;
    }

    /**
     * @param int $idEvenement
     */
    public function setIdEvenement($idEvenement)
    {
        $this->idEvenement = $idEvenement;
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param string $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return string
     */
    public function getLien()
    {
        return $this->lien;
    }

    /**
     * @param string $lien
     */
    public function setLien($lien)
    {
        $this->lien = $lien;
    }

    /**
     * @return \DateTime
     */
    public function getDateEvent()
    {
        return $this->dateEvent;
    }

    /**
     * @param \DateTime $dateEvent
     */
    public function setDateEvent($dateEvent)
    {
        $this->dateEvent = $dateEvent;
    }

    /**
     * @return \TypeEvent
     */
    public function getTypeEvent()
    {
        return $this->typeEvent;
    }

    /**
     * @param \TypeEvent $typeEvent
     */
    public function setTypeEvent($typeEvent)
    {
        $this->typeEvent = $typeEvent;
    }


}

