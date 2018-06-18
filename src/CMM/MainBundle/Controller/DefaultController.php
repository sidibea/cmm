<?php

namespace CMM\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CMMMainBundle:Default:index.html.twig');
    }
}
