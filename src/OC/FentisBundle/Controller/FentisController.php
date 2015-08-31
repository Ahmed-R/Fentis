<?php

namespace OC\FentisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use OC\FentisBundle\Entity\Users;
use OC\FentisBundle\Entity\UsersRepository;
use OC\FentisBundle\Entity\FichePerso;
use OC\FentisBundle\Entity\FichePersoRepository;
use OC\FentisBundle\Entity\Skills;
use OC\FentisBundle\Entity\SkillsRepository;
use OC\FentisBundle\Entity\Image;
use OC\FentisBundle\Entity\ImageRepository;
use OC\FentisBundle\Form\UsersType;
use OC\FentisBundle\Form\FichePersoType;
use OC\FentisBundle\Form\SkillsType;
use OC\FentisBundle\Form\ImageType;

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
    
    public function ajoutAction(Request $request){
        $user = new Users();
        $user->setLogin("AhmedTest2");
        
        $ficheperso = new FichePerso();
        $ficheperso->setPersonnage("ValkiardTest2");
        $ficheperso->setXptotal("100");
        $ficheperso->setXprestant("10");
        $ficheperso->setRace("elfe");
        $ficheperso->setAvantagesRaciaux("Doué pour la magie");
        $ficheperso->setInconvenientRaciaux("Fragile");
        $ficheperso->setUser($user);
        
        $skills = new Skills();
        $skills->setDetection("10");
        $skills->setEducation("9");
        $skills->setParade("8");
        $skills->setUser($user);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->persist($ficheperso);
        $em->persist($skills);
        
        $em->flush();
        
        return $this->render('OCFentisBundle:FentisViews:layout.html.twig', array(
            'name' => 'page d\'ajout'
        ));
    }
    
    public function voirAction(){
 
    }

}