<?php

namespace OC\FentisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use OC\FentisBundle\Entity\Users;
use OC\FentisBundle\Entity\FichePerso;
use OC\FentisBundle\Entity\Skills;
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
        //Récupération de la premiere partie de la feuille de perso
        $recup1 = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('OCFentisBundle:Users')
                ->findOneBy(array('login' => 'AhmedTest1'));
        $formBuilder1 = $this->get('form.factory')->createBuilder('form', $recup1);
        $formBuilder1->add('login'       ,'text');
        $form1 = $formBuilder1->getForm();
        
        //Récupération de la deuxieme partie de la feuille de perso
        $recup2 = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('OCFentisBundle:FichePerso')
//                ->findOneBy(array('user_id' => "2"))
                //'ai triché : le findOneBy ne semble pas marcher. ai cherché directement via l'id.
                ->find(1)
                ;
        $formBuilder2 = $this->get('form.factory')->createBuilder('form', $recup2);
        $formBuilder2
                ->add('personnage'          ,'text')
                ->add('xptotal'             ,'number')
                ->add('xprestant'           ,'number')
                ->add('avantagesraciaux'    ,'text')
                ->add('InconvenientRaciaux' ,'text');
        $form2 = $formBuilder2->getForm();
        
        return $this->render('OCFentisBundle:FentisViews:layout.html.twig', array(
            'name' => 'voir',
            'recup1' => $form1->createView(),
            'recup2' => $form2->createView()
        ));
    }
    
}