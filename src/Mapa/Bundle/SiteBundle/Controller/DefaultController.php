<?php

namespace Mapa\Bundle\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MapaSiteBundle:Default:index.html.twig', array('name' => $name));
    }
}
