<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Mapa\Bundle\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of Admin
 *
 * @author ajunior
 */
class AdminController extends Controller {
    
    public function indexAction()
    {
        return $this->render('MapaSiteBundle:Admin:index.html.twig');
    }
    
}
