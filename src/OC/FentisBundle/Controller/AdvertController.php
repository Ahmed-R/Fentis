<?php

namespace OC\FentisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller {
    public function loginAction(){
        $content = $this
                ->get('templating')
                ->render('OCFentisBundle:Advert:login.html.twig');
        return new Response($content);                
    }
    
    public function indexAction(){
        $content = $this
                ->get('templating')
                ->render('OCFentisBundle:Advert:index.html.twig', array(
                    'name' => 'Valkiard'
                ));
        return new Response($content);
    }
 
    public function charprofAction(){
        return new Response("character profile page");
    }
}