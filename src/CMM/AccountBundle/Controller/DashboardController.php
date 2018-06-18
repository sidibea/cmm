<?php

namespace CMM\AccountBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render('CMMAccountBundle::dashboard.html.twig');
    }
}
