<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {        
        return $this->render('default/homepage.html.twig');
    }

    /**
     * @Route("/servicios", name="servicios")
     */
    public function serviciosAction(Request $request)
    {        
        return $this->render('default/servicios.html.twig');
    }

    /**
     * @Route("/contacto", name="contacto")
     */
    public function contactoAction(Request $request)
    {        
        return $this->render('default/contacto.html.twig');
    }
}