<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MyMainController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
        $user = array('name' => 'Scott', 'active' => true);
        return $this->render('AppBundle:MyMain:index.html.twig', array('user' => $user));
    }

}
