<?php
namespace AppBundle\Repository;
/**
 * FormationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FormationRepository extends \Doctrine\ORM\EntityRepository
{
  /**
 * Find...
 **/
 public function FindAllFormations(){
     $qBuilder = $this
     ->getEntityManager()
     ->createQueryBuilder();
     $qbuilder->select('f');
     $qBuilder->from('AppBundle:Formation','f');
     
     $result = $qBuilder->getQuery()->getResult();
     
     return $result;
 }
}