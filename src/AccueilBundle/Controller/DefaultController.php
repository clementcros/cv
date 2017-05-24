<?php

namespace AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('AccueilBundle:Default:index.html.twig');
    }
public function voirAction() { 
$manageur = $this->getDoctrine()->getManager(); 
$listesurfeur = $manageur->getRepository("CamionBundle:PoidsLourd")->findAll();   
 
return $this->render("AccueilBundle:Default:index.html.twig",array(
"coutn"=>count($poidslourd),
"couta"=>$poidslour)); }
}
