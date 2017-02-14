<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of ViewController
 *
 * @author lecaille-eddy
 */
class ViewController extends Controller {
    /**
     * @Route("/login")
     */
    public function getHome(){
        return $this->render("default/connection.html.twig");
    }
           
    /**
     * @Route("/")
     */
    public function getTchat(){
        return $this->render("default/tchat.html.twig");
    }
}
