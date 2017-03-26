<?php
/**
 * Created by PhpStorm.
 * User: akoum
 * Date: 02/03/2017
 * Time: 17:52
 */

namespace Eloboosted\GameinjectionBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Eloboosted\GameinjectionBundle\Entity\List_ami;

class CompteRepository extends EntityRepository
{
    public function findByAmiCommun1($id)
    {
        return $this
            ->getEntityManager()
                ->createQuery("
                SELECT cm FROM EloboostedGameinjectionBundle:Compte cm WHERE cm.idCompte IN 
                (
                select IDENTITY (u.id_compte_2_la) from EloboostedGameinjectionBundle:List_ami u where u.id_compte_1_la = :id1)
               
                ")

            ->setParameters(array('id1'=>$id))
            ->getResult();
    }


    public function findByAmiCommun2($id)
    {
        return $this
            ->getEntityManager()
            ->createQuery("
                SELECT cm FROM EloboostedGameinjectionBundle:Compte cm WHERE cm.idCompte IN 
                (
                select IDENTITY (u.id_compte_1_la) from EloboostedGameinjectionBundle:List_ami u where u.id_compte_2_la = :id1)
               
                ")

            ->setParameters(array('id1'=>$id))
            ->getResult();
    }
}