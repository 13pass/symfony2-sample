<?php

namespace Ingesup\TPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('IngesupTPBundle:Default:index.html.twig', array('name' => $name));
    }
}
