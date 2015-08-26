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
                ->render('OCFentisBundle:Advert:layout.html.twig', array(
                        "name" => "index"
                ));
        return new Response($content);
    }
 
    public function charprofAction(){
        $content = $this
                ->get('templating')
                ->render('OCFentisBundle:Advert:layout.html.twig', array(
                        "name" => "charprof"
                ));
        return new Response($content);
    }

    public function globalsAction(){
        $content = $this
                ->get('templating')
                ->render('OCFentisBundle:Advert:layout.html.twig', array(
                        "name" => "globals"
                ));
        return new Response($content);
    }
    
    public function skillsAction(){
        $content = $this
                ->get('templating')
                ->render('OCFentisBundle:Advert:layout.html.twig', array(
                        "name" => "skills"
                ));
        return new Response($content);
    }
    
    public function lifeinfoAction(){
        $content = $this
                ->get('templating')
                ->render('OCFentisBundle:Advert:layout.html.twig', array(
                        "name" => "lifeinfo"
                ));
        return new Response($content);
    }
    
    public function equipAction(){
        $content = $this
                ->get('templating')
                ->render('OCFentisBundle:Advert:layout.html.twig', array(
                        "name" => "equip"
                ));
        return new Response($content);
    }
    
    public function chatAction(){
        $content = $this
                ->get('templating')
                ->render('OCFentisBundle:Advert:layout.html.twig', array(
                        "name" => "chat"
                ));
        return new Response($content);
    }
    }
