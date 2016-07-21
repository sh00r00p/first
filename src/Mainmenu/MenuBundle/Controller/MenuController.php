<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Mainmenu\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/menu")
 */
class MenuController extends Controller
{
    /**
     * @Route("", name="menu")
     * @Template("MCCoreBundle:Default:index.html.twig")
     */
    public function indexAction()
    {
        return array('name' => uniqid());
    }
}
