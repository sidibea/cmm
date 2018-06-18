<?php

namespace CMM\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CMMUserBundle:Default:index.html.twig');
    }
}
