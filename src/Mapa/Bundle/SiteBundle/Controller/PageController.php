<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Mapa\Bundle\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of PageController
 *
 * @author ajunior
 */
class PageController extends Controller {
    
    public function indexAction()
    {
        return $this->render('MapaSiteBundle:Page:index.html.twig');
    }
    
}
