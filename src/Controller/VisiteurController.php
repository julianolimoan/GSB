<?php

namespace App\Controller;

use App\Entity\Visiteur;
use App\Form\VisiteurType;
use App\Entity\FicheFrais;
use App\Form\FicheFraisType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class VisiteurController extends AbstractController
{
    /**
     * @Route("/visiteur", name="visiteur")
     */
    public function index()
    {
        return $this->render('visiteur/index.html.twig', [
            'controller_name' => 'VisiteurController',
        ]);
    }

    /**
     *@Route("/visiteur/inscription", name="inscrirevisiteur")
     */


	public function creerVisiteur(Request $query)
    {    //On crée un objet Candiat
        $cand= new Visiteur();

         //Créer un objet de type formulaire
        $form = $this->createForm(VisiteurType::class, $cand);
            //on fait le lien requette HTTP <-> Formulaire
            // A partir de maintenant, la variable $categ contient les valeurs entrées dans le formulaire
         $form->handleRequest($query);

         //Methode d'envoi de la requete

         if ($query->isMethod('POST')) {
            if ($form ->isValid()) {
                $em =$this->getDoctrine()->getManager();
                $em->persist($cand);
                $em->flush();
                $query->getSession()->getFlashBag()->add('notice','Candidat enregistré.');
                return new Response("Visiteur ajouté");
                //return $this->redirectionToRoute('rli_exname_homepage_1', array('id'=>
                  //$cand->getId()));

             
                }
            }
            return $this->render('visiteur/formulaire.html.twig',array('form'=>$form->createView()));
         }

    /**
    *@Route("/", name="login")
    */
  public function connectionVisiteur(Request $query)
{
        $visiteur = new Visiteur;
        $summitt= false;
        $form = $this->createForm(VisiteurType::class, $visiteur);
        $form->handleRequest($query);
        if ($form->isSubmitted() && $form->isValid()) {
        $em = $this->getDoctrine()->getManager();
     $data = $form->getData();
     $login = $form['login']->getData();
        $mdp = $form['mdp']->getData();
        $lesVisiteurs= new Visiteur();
        $lesVisiteurs= $this->getDoctrine()->getRepository(Visiteur::class)->seConnecter($login,$mdp);

        if($lesVisiteurs != null){
            $session=new Session();
            $session->set('user_nom',$lesVisiteurs->getNom());
            $session->set('user_nom',$lesVisiteurs->getPrenom());
            $session->set('user_id',$lesVisiteurs->getId());
            $session->set('login','Bonjour');
            $_SESSION = array();
            $_SESSION['login']= true;
            $_SESSION['visiteur']= $lesVisiteurs;
            return $this->redirectToRoute('CompteVisiteur');
        }

        $summit =true;

    }
        return $this->render('visiteur/connexion.html.twig', array('form'=>$form->createView(),'essie'=>$summitt,));

}

    /**
    *@Route("/visiteur/CompteVisiteur", name="CompteVisiteur")
    */    
    public function CompteVisiteur()
        {

           if(isset($_SESSION['login'])){
             if($_SESSION['login']==true){
                return $this->render('visiteur/navbar.html.twig');
             }
           }
           return $this->redirectToRoute('seConnecter');
        }
        }



 