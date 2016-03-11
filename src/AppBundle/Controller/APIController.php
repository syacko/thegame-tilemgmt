<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class APIController extends Controller
{
    /**
     * @Route("/unbuildable")
     * @Route("/cannotbuildon")
     */
    public function unbuildableAction()
    {
        return new JsonResponse(array('name' => 'Scott'));
    }

    /**
     * @Route("/isbuildable")
     */
    public function isbuildableAction()
    {
        return new JsonResponse(array('name' => 'Yacko'));
    }


}
