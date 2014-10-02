<?php

namespace Random\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class RandomController extends Controller
{
    
    /**
     * @Template()
     */
    public function indexAction($limit)
    {
        $number = rand(1, $limit);

        $obj = new \stdClass();
        $obj->id = 32;


        //return new Response('<html><body>'. rand(1, $limit) .'</body></html>');
        
        //return $this->render('RandomHelloBundle:Random:index.html.twig', array('number' => $number));

        return array('number' => $number, 'obj' => $obj);
    }
}
