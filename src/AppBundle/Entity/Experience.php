<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity 
 * @ORM\Table(name="Experience") 
 * @ApiResource
 **/

class Experience {
    
    /** @ORM\Id 
    * @ORM\Column(type="integer") 
    * @ORM\GeneratedValue (strategy="AUTO") 
    **/
    private $id;
    
    /** @ORM\Column(type="string") **/
    private $name;
    
    /** @ORM\Column(type="date") **/
    private $annee;
    
    function getId()
    {
        return $this->id;
    }
    function setId($id)
    {
        $this->id = $id;
    }
    
    function getName()
    {
        return $this->name;
    }
    function setName($name)
    {
        $this->name = $name;
    }
    
     function getAnnee()
    {
        return $this->annee;
    }
    function setAnnee($annee)
    {
        $this->annee = $annee;
    }
}

