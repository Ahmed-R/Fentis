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

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use OC\UserBundle\Entity\User;

class FentisController extends Controller {
    public function firstAction(){
        // la verification de l'user est faite en front, via un if sur l'affichage de la page
        return $this->redirect($this->generateUrl('oc_fentis_index'));
    }
    
    public function indexAction(){        
        $content = $this
                ->get('templating')
                ->render('OCFentisBundle:FentisViews:layout.html.twig', array(
                        "name" => "index"
                ));
        return new Response($content);
    }
    
    public function chatAction(){
        $content = $this
                ->get('templating')
                ->render('OCFentisBundle:FentisViews:layout.html.twig', array(
                        "name" => "page de discussion"
                ));
        return new Response($content);
    }
    
    public function ajoutAction(Request $request){
        $user = new Users();
        
        //On récupère le user connecté
        $loggedin = $this->container->get('security.context')->getToken()->getUser();

        //on prérempli le login avec le $loggedin récupéré
        $user->setLogin("$loggedin");
        
        $form = $this->get('form.factory')->create(new usersType(), $user);
        
        //si le formulaire est valide, on enregistre
        if ($form->handleRequest($request)->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            
            //Message de validation d'enregistrement
            $request->getSession()->getFlashBag()->add('notice', 'ajout ok');
            return $this->redirect($this->generateUrl('oc_fentis_index', array(
                'name' => 'page post creation de perso'
            )));
        }
        
        return $this->render('OCFentisBundle:FentisViews:layout.html.twig', array(
            'form' => $form->createView(),
            'name' => 'page de creation de perso'
        ));   
    }
    
    public function voirAction(){
        
        //On récupère le login de l'utilisateur connecté
        $loggedin = $this->container->get('security.context')->getToken()->getUser();

        //On récupère le Repository des users
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('OCFentisBundle:users');
        //On recupere tous les users enregistrés
        //$listuser = $repository->findAll();
        //On cherche le personnage où le login renseigné est le même que celui de la session en court
        $listuser = $repository->findBy(array('login' => "$loggedin"));
        
        
        //On envoie à la vue la variable $content qui contient $listuser. 
        //On parcourra cet array avec un boucle for
        //pour avoir chaque attribut de chaque user
        $content = $this
                ->get('templating')
                ->render('OCFentisBundle:FentisViews:layout.html.twig', array(
                    "name" => "page de visualisation de perso",
                    "listuser" => $listuser
                ));
        return new Response($content);
        
    }
    
    public function modifAction(){
        //On récupère le login de l'utilisateur connecté
        $loggedin = $this->container->get('security.context')->getToken()->getUser();

        //On récupère le Repository des users
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('OCFentisBundle:users');
        //On recupere tous les users enregistrés
        //$listuser = $repository->findAll();
        //On cherche le personnage où le login renseigné est le même que celui de la session en court
        $listuser = $repository->findBy(array('login' => "$loggedin"));        
        
        $content = $this
                ->get('templating')
                ->render('OCFentisBundle:FentisViews:layout.html.twig', array(
                    "name" => "page de modification",
                    "listusermodif" => $listuser
                ));
        return new Response($content);
        
    }
    
    public function promoteStartAction(){
    //On récupère la liste des users en BD
        $allusers = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('OCUserBundle:user')
                ->findAll();
        
        $content = $this
                ->get('templating')
                ->render('OCFentisBundle:FentisViews:promotestart.html.twig', array(
                        "name" => "page de discussion",
                        "allusers" => $allusers
                ));
        return new Response($content);
    }

    public function levelUpAction($user){
        //On récupère le bon repository, relatif au user, et non pas au personnage
        $topromote = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('OCUserBundle:user')
                ->findOneBy(array('username' => $user));
        //On effectue l'action
        $test = $topromote->removeRole("ROLE_TEST");        
        //On persist et flush le changement
        $em = $this->getDoctrine()->getManager();
        $em->persist($test);
        $em->flush();
        
        
        $content = $this
                ->get('templating')
                ->render('OCFentisBundle:FentisViews:layout.html.twig', array(
                        "name" => "$test"
                ));
        return new Response($content);      
//        return $this->redirect($this->generateUrl('oc_fentis_index'));

    }

}