<?php

namespace Eloboosted\GameinjectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChatLog
 *
 * @ORM\Table(name="chat_log")
 * @ORM\Entity
 */
class ChatLog
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_chat_message", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idChatMessage;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_compte_1", type="integer", nullable=false)
     */
    private $idCompte1;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_compte_2", type="integer", nullable=false)
     */
    private $idCompte2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="datetime", nullable=false)
     */
    private $time = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=false)
     */
    private $content;

    /**
     * @return int
     */
    public function getIdChatMessage()
    {
        return $this->idChatMessage;
    }

    /**
     * @param int $idChatMessage
     */
    public function setIdChatMessage($idChatMessage)
    {
        $this->idChatMessage = $idChatMessage;
    }

    /**
     * @return int
     */
    public function getIdCompte1()
    {
        return $this->idCompte1;
    }

    /**
     * @param int $idCompte1
     */
    public function setIdCompte1($idCompte1)
    {
        $this->idCompte1 = $idCompte1;
    }

    /**
     * @return int
     */
    public function getIdCompte2()
    {
        return $this->idCompte2;
    }

    /**
     * @param int $idCompte2
     */
    public function setIdCompte2($idCompte2)
    {
        $this->idCompte2 = $idCompte2;
    }

    /**
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param \DateTime $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }


}

