<?php
/**
 * Created by PhpStorm.
 * User: Bloodthirst
 * Date: 3/22/2017
 * Time: 8:15 PM
 */
namespace Eloboosted\GameinjectionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Compte
 *
 * @ORM\Table(name="list_ami")
 * @ORM\Entity
 */
class List_ami
{
    /**
     * @var \Compte
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_compte_1_la", referencedColumnName="id_compte")
     * })
     */
    private $id_compte_1_la;

    /**
     * @var \Compte
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="Compte")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_compte_2_la", referencedColumnName="id_compte")
     * })
     */
    private $id_compte_2_la;

    /**
     * @return \Compte
     */
    public function getIdCompte1La()
    {
        return $this->id_compte_1_la;
    }

    /**
     * @param \Compte $id_compte_1_la
     */
    public function setIdCompte1La($id_compte_1_la)
    {
        $this->id_compte_1_la = $id_compte_1_la;
    }

    /**
     * @return \Compte
     */
    public function getIdCompte2La()
    {
        return $this->id_compte_2_la;
    }

    /**
     * @param \Compte $id_compte_2_la
     */
    public function setIdCompte2La($id_compte_2_la)
    {
        $this->id_compte_2_la = $id_compte_2_la;
    }


}