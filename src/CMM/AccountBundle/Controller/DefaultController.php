<?php

namespace CMM\AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CMMAccountBundle:Default:index.html.twig');
    }
}
