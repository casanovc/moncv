<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity 
 * @ORM\Table(name="Loisir") 
 * @ApiResource
 **/
 
 class Loisir {
     
     /** @ORM\Id 
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue (strategy="AUTO") 
     **/
     private $id;
     
     /** @ORM\Column(type="string") **/
     private $name;
     
     /** @ORM\Column(type="string") **/
     private $type;
     
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
    
     function getType()
    {
        return $this->type;
    }
    function setType($type)
    {
        $this->type = $type;
    }
    
     function getDuree()
    {
        return $this->duree;
    }
    function setDuree($duree)
    {
        $this->duree = $duree;
    }
 }

