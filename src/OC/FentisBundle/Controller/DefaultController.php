<?php

namespace OC\FentisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OCFentisBundle:Default:index.html.twig', array('name' => $name));
    }
    
  
}

class AdvertController {
    public function indexAction(){
        return new Response("Hello World !");
    }
}