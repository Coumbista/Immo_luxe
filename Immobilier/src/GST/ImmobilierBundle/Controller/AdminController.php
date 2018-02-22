<?php

namespace GST\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use GST\ImmobilierBundle\Entity\Bien;

class AdminController extends Controller
{
    public function ListAction(){
    $repository = $this
    ->getDoctrine()
    ->getManager()
    ->getRepository('GSTImmobilierBundle:Bien');
//recupérer les données de la base de données0
    $listbien = $repository->findAll();

   return $this->render('GSTImmobilierBundle:Admin:list.html.twig',
   array("biens"=>$listbien));

}
}
