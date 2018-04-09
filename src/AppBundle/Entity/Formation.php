<?php
 
namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource; 
use Doctrine\ORM\Mapping as ORM;
 
 /**
  * @ORM\Entity
  * @ORM\Table(name="Formation")
  * @ApiResource
  **/
  
  class Formation {
      /** @ORM\Id
       * @ORM\Column(type="integer")
       * @ORM\GeneratedValue (strategy="AUTO")
       **/
       private $id;
       
      /** @ORM\Column(type="string") **/
      private $name;
      
      /** @ORM\Column(type="date") **/
      private $dateDebut;
      
      /** @ORM\Column(type="date") **/
      private $dateFin; 
      
      /** @ORM\Column(type="string") **/
      private $lieu;
      
      
    function getId(){
        return $this->id;
    }
    
    function setId(){
        $this->id = $id;
    }
    
    function getName(){
        return $this->name;
    }
    
    function setName(){
        $this->name = $name;
    }
    
    function getDateDebut(){
        return $this->dateDebut;
    }
    
    function setDateDebut(){
        $this->dateDebut = $dateDebut;
    }
    
    function getDateFin(){
        return $this->dateFin;
    }
    
    function setDateFin(){
        $this->dateFin = $dateFin;
    }
    
    function getLieu(){
        return $this->lieu;
    }
    
    function setLieu(){
        $this->lieu = $lieu;
    }
  }
 