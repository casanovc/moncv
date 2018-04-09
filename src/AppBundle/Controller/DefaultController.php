<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/cv/{name}/{firstname}", name="homepage")
     * @Template
     */
    public function indexAction($name="Clemence", $firstname="Casanova")
    {
           //$this->getDoctrine()->getRepository('ApiBundle:User')->findOneBy(['username'=>$username]);
      // $eManager = $this->getdoctrine()->getManager();
    //$loisir = eManager->getRepository("AppBundle:Loisir")->FindAll();
        
        // replace this example code with whatever you need
        return array('name' => $name, 'firstname' => $firstname);
    }
    
     /**
     * @Route("/demo", name="demo")
     * @Template
     */
    public function demoAction(Request $request)
    {
        // replace this example code with whatever you need
        return array();
    }

    public function insertAction (){
        $form = new Formation ();
        $form ->setName('Ma formation');
        $form ->setLieu('Grenoble');
        $form ->setDateDebut(new \DateTime());
        $form -> setDateFin(new \DateTime());
        
        $eManager=$this->getDoctrine()->getManager();
        $eManager->persist($form);
        
        $eManager->flush();
        
        return array ();
        
    }
    
 
}
