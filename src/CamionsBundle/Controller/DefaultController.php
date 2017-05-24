<?php

namespace CamionsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/accueil")
     */
    public function indexAction()
    {
        return $this->render('CamionsBundle:Default:index.html.twig');
    }
}
