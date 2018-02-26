<?php

namespace GST\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use GST\ImmobilierBundle\Entity\Bien;
use GST\ImmobilierBundle\Entity\Localite;

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
public function rechargeAction(){
    return $this->render('GSTImmobilierBundle:Admin:recharge.html.twig',
    array());
 
}
public function ListlocaliteAction(){
    $repository = $this
    ->getDoctrine()
    ->getManager()
    ->getRepository('GSTImmobilierBundle:Localite');
//recupérer les données de la base de données0
    $listloca = $repository->findAll();

   return $this->render('GSTImmobilierBundle:Admin:localite.html.twig',
   array("localites"=>$listloca));

}
public function ListtypeAction(){
    $repository = $this
    ->getDoctrine()
    ->getManager()
    ->getRepository('GSTImmobilierBundle:Typebien');
//recupérer les données de la base de données0
    $listtype = $repository->findAll();
   return $this->render('GSTImmobilierBundle:Admin:type.html.twig',
   array("types"=>$listtype));

}
public function ListreserveAction(){
    $repository = $this
    ->getDoctrine()
    ->getManager()
    ->getRepository('GSTImmobilierBundle:Reservation');
//recupérer les données de la base de données0
    $listreserve = $repository->findAll();
   return $this->render('GSTImmobilierBundle:Admin:listereserve.html.twig',
   array("reserves"=>$listreserve));

}
}
