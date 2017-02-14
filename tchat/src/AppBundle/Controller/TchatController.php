<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of TchatController
 *
 * @author lecaille-eddy
 */
class TchatController extends Controller{
    /**
     * @Route("/envoie")
     */
    public function getMessage(Request $r){
        $message=$r->get("message");
        
        $json=new JsonResponse();
        return $json->setData($message);
        
        
    }
    
}
