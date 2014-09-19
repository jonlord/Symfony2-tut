<?php

namespace Random\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class RandomController extends Controller
{
    public function indexAction($limit)
    {
        $number = rand(1, $limit);
        
        //return new Response('<html><body>'. rand(1, $limit) .'</body></html>');
        
        return $this->render('RandomHelloBundle:Random:index.html.twig', array('number' => $number));
    }
}
