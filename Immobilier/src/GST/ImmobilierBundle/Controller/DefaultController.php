<?php

namespace GST\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GSTImmobilierBundle:Default:index.html.twig');
    }
}
