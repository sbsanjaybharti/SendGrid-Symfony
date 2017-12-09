<?php

namespace CRS\SendgridBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SendGridBundle:Default:index.html.twig');
    }
}
