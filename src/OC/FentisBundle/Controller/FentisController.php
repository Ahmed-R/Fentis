<?php

namespace OC\FentisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use OC\FentisBundle\Entity\Users;
use OC\FentisBundle\Entity\Image;

class FentisController extends Controller {
    public function loginAction(){
        $content = $this
                ->get('templating')
                ->render('OCFentisBundle:FentisViews:login.html.twig');
        return new Response($content);                
    }
    
    public function indexAction(){
        $content = $this
                ->get('templating')
                ->render('OCFentisBundle:FentisViews:layout.html.twig', array(
                        "name" => "index"
                ));
        return new Response($content);
    }
 
    public function charprofAction(){
        $content = $this
                ->get('templating')
                ->render('OCFentisBundle:FentisViews:layout.html.twig', array(
                        "name" => "charprof"
                ));
        return new Response($content);
    }

    public function globalsAction(){
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('OCFentisBundle:Users')
                ;
        
        $listUsers = $repository->myfindAll();
        
        $content = $this
                ->get('templating')
                ->render('OCFentisBundle:FentisViews:layout.html.twig', array(
                    "name" => "globals",
                    "listUsers" => $listUsers
                ));
        return new Response($content);
    }
    
    public function skillsAction(){
        $content = $this
                ->get('templating')
                ->render('OCFentisBundle:FentisViews:layout.html.twig', array(
                        "name" => "skills"
                ));
        return new Response($content);
    }
    
    public function lifeinfoAction(){
        $content = $this
                ->get('templating')
                ->render('OCFentisBundle:FentisViews:layout.html.twig', array(
                        "name" => "lifeinfo"
                ));
        return new Response($content);
    }
    
    public function equipAction(){
        $content = $this
                ->get('templating')
                ->render('OCFentisBundle:FentisViews:layout.html.twig', array(
                        "name" => "equip"
                ));
        return new Response($content);
    }
    
    public function chatAction(){
        $content = $this
                ->get('templating')
                ->render('OCFentisBundle:FentisViews:layout.html.twig', array(
                        "name" => "chat"
                ));
        return new Response($content);
    }
    
    public function addvalkiardAction(Request $request){
        $user = new Users();
        $user->setLogin('Valkiard');
        
        $image = new Image();
        $image->setUrl('http://www.fightersgeneration.com/characters2/big-k.jpg');
        $image->setAlt('Mec Classe');
        
        $user->setImage($image);
        
        $em = $this
                ->getDoctrine()
                ->getManager();
        //Persistance de l'objet User créé en "dur"
        $em->persist($user);
        //flush de la persistance pour la valider
        $em->flush();
        
        return $this
                ->render('OCFentisBundle:FentisViews:layout.html.twig', array(
            'name' => $user->getLogin().' ajouté'
        ));
        
    }

    public function addkristobaldAction(Request $request){
        $user = new Users();
        $user->setLogin('Kristobald');
        
        $image = new Image();
        $image->setUrl('http://i2.cdscdn.com/pdt2/2/3/6/1/700x700/rub0082686689236/rw/crane-souple-chauve-alien.jpg');
        $image->setAlt('Mec Chauve');
        
        $user->setImage($image);
        
        $em = $this
                ->getDoctrine()
                ->getManager();
        //Persistance de l'objet User créé en "dur"
        $em->persist($user);
        //flush de la persistance pour la valider
        $em->flush();
        
        return $this
                ->render('OCFentisBundle:FentisViews:layout.html.twig', array(
            'name' => $user->getLogin().' ajouté'
        ));
        
    }
    }
