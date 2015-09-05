<?php

namespace OC\FentisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use OC\FentisBundle\Entity\users;
use OC\FentisBundle\Entity\skills;
use OC\FentisBundle\Entity\image;

use OC\FentisBundle\Form\usersType;
use OC\FentisBundle\Form\fichePersoType;
use OC\FentisBundle\Form\skillsType;
use OC\FentisBundle\Form\imageType;

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
        $content = $this
                ->get('templating')
                ->render('OCFentisBundle:FentisViews:layout.html.twig', array(
                    "name" => "globals",
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
        $form = $this->get('form.factory')->create(new usersType(), $user);
        
        if ($form->handleRequest($request)->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            $request->getSession()->getFlashBag()->add('notice', 'ajout ok');
            return $this->redirect($this->generateUrl('oc_fentis_welcome', array(
                'name' => 'bleubleubleu'
            )));
        }
        
        return $this->render('OCFentisBundle:FentisViews:layout.html.twig', array(
            'form' => $form->createView(),
            'name' => 'bliblibli vide'
        ));   
    }
    
    public function voirAction(){
 
    }

}