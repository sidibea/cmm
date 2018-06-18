<?php

namespace CMM\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('CMMMainBundle::index.html.twig');
    }
}
