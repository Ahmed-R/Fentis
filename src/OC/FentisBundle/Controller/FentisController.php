<?php

namespace OC\FentisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use OC\FentisBundle\Entity\Users;
use OC\FentisBundle\Entity\Fiche;
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
    
    public function formAction(Request $request){
        //Création d'un nouvel objet Users
        $user = new Users();
        
        //Recupération du constructeur de formulaire
        $formBuilder = $this
                ->get('form.factory')
                ->createBuilder('form', $user);
        
        //Affichage
        $formBuilder
                ->add('champs1',    'text')
                ->add('champs2',    'password')
                ->add('champs3',    'textarea')
                ->add('save',       'submit')
                ;
        
        //Recuperation du formulaire
        $form = $formBuilder->getForm();
        
        return $this->render('OCFentisBundle:FentisViews:layout.html.twig', array(
            'name' => 'test',
            'form' => $form->createView(),
        ));

    }
    
    public function ajoutAction(){
                
        $user = new Users();        
        $user->setLogin("Valkiard");
        
        $fiche = new Fiche();
        $fiche->setPersonnage("Azuro");
        $fiche->setRace("Humain");
        $fiche->setSexe("Male");
        $fiche->setAvantagesRaciaux("Polyvalent");
        $fiche->setInconvenientRaciaux("Tendances Pyromanes");
        
        $user->setFiche($fiche);
        
        $image = new Image();
        $image->setUrl("http://a398.idata.over-blog.com/367x500/2/81/84/29/R-pertoir-images-diverses/arton221.jpg");
        $image->setAlt("Mage de Feu");
        $user->setImage($image);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        
        return $this->render('OCFentisBundle:FentisViews:layout.html.twig', array(
            'name' => "page ajout",
            'user' => $user
                
        ));
    }
}