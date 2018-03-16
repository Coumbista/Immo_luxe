<?php

namespace GST\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use GST\ImmobilierBundle\Entity\Bien;
use GST\ImmobilierBundle\Entity\Localite;
use GST\ImmobilierBundle\Entity\Contrat;
use GST\ImmobilierBundle\Entity\Paiement;
use Symfony\Component\HttpFoundation\Request;
use GST\ImmobilierBundle\Entity\Typebien;
use GST\ImmobilierBundle\Form\BienType;
use GST\ImmobilierBundle\Form\LocaliteType;
use GST\ImmobilierBundle\Form\TypebienType;
use Dompdf\Options;
use Dompdf\Dompdf;
use Symfony\Component\HttpFoundation\Response;

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
    $loc= new Localite();          
    $form= $this->createForm(LocaliteType::class,$loc);
    $repository = $this
    ->getDoctrine()
    ->getManager()
    ->getRepository('GSTImmobilierBundle:Localite');
//recupérer les données de la base de données0
    $listloca = $repository->findAll();

   return $this->render('GSTImmobilierBundle:Admin:localite.html.twig',
   array("form"=>$form->createView(),"localites"=>$listloca));

}
public function ListtypeAction(){
    $type= new Typebien();          
    $form= $this->createForm(TypebienType::class,$type);
    $repository = $this
    ->getDoctrine()
    ->getManager()
    ->getRepository('GSTImmobilierBundle:Typebien');
//recupérer les données de la base de données0
    $listtype = $repository->findAll();
   return $this->render('GSTImmobilierBundle:Admin:type.html.twig',
   array("form"=>$form->createView(),"types"=>$listtype));

}
public function ListreserveAction(){
    $em = $this
    ->getDoctrine()
    ->getManager();
    // ->getRepository('GSTImmobilierBundle:Reservation')
    
//recupérer les données de la base de données0

    $listreserve = $em->getRepository('GSTImmobilierBundle:Reservation')->findBy(['etat'=>0]);
    // $listbien = $em->getRepository('GSTImmobilierBundle:Bien')->findBy(['etat'=>0]);
   return $this->render('GSTImmobilierBundle:Admin:listereserve.html.twig',
   array("reserves"=>$listreserve));

}
public function detailreserverAction($id){
    $repository = $this
    ->getDoctrine()
    ->getManager()
    ->getRepository('GSTImmobilierBundle:Reservation');
//recupérer les données de la base de données0
    $detailbien = $repository->find($id);
   return $this->render('GSTImmobilierBundle:Admin:detail.html.twig',
   array("reservation"=>$detailbien ));

}
public function pdf0Action($id) {
    
 $em = $this
 ->getDoctrine()
 ->getManager();
 $reservation= $em->getRepository('GSTImmobilierBundle:Reservation')->find($id);
 $textcontrat = $em->getRepository('GSTImmobilierBundle:textContrat')->findAll();
 $options = new Options();
 // Pour simplifier l'affichage des images, on autorise dompdf à utiliser 
 // des  url pour les nom de  fichier
 $options->set('isRemoteEnabled', TRUE);
 // On crée une instance de dompdf avec  les options définies
 $dompdf = new Dompdf($options);
 // On demande à Symfony de générer  le code html  correspondant à 
 // notre template, et on stocke ce code dans une variable
 $html = $this->renderView(
   'GSTImmobilierBundle:Admin:pdf.html.twig', 
   array("reservation"=> $reservation,"texts"=>$textcontrat)
 );
 // On envoie le code html  à notre instance de dompdf
 $dompdf->loadHtml($html);        
 // On demande à dompdf de générer le  pdf
 $dompdf->render();
 // On renvoie  le flux du fichier pdf dans une  Response pour l'utilisateur
 return new Response ($dompdf->stream());
    
 }


public function saveContratAction(Request $request,$id)
{
    $em = $this
    ->getDoctrine()
    ->getManager();
   
    $reservation= $em->getRepository('GSTImmobilierBundle:Reservation')->find($id);
    $textcontrat = $em->getRepository('GSTImmobilierBundle:textContrat')->findAll();
   
            if ($request->isMethod('POST'))
            {

                if(isset($_POST['enregistrer'])){
                 extract($_POST);
                //  $em = $this
                //  ->getDoctrine()
                //  ->getManager();
                 $client= $reservation->getClient();
                //  echo $reservation->getClient()->getId()."-";
                // echo $reservation->getBien()->getId();

                $listbien = $reservation->getBien();
                $bien=$em->getRepository('GSTImmobilierBundle:Bien')->find($idbien);
                $duree=$request->get('duree');
                $mensualite=$request->get('mensualite');
                $total=$request->get('total');
                // $localite=new Localite();
                // $typebien=new Typebien();
                $bien= new Bien();
                $contrat= new Contrat();
                $contrat->setDateContrat(new \DateTime());
                $contrat->setCaution($reservation->getBien()->getPrix_loc());
                $contrat->setDuree("1 an renouvelable");
                $contrat->setBien($reservation->getBien());
                $contrat->setClient($reservation->getClient());               
                $em->persist($contrat);
                $em->flush();
          if ($contrat)
          {
               
                $paiement = new Paiement();
                $paiement->setDatePaiement(new \DateTime());
                $paiement->setMontant($total);
                $paiement->setPeriode("fevrier 2018");
                $paiement->setContrat($contrat);
                $em->persist($paiement);
                $em->flush();
                $update=$this->getDoctrine()
                ->getManager()
                ->getRepository('GSTImmobilierBundle:Bien')
                ->updateEtatBien($idbien);
           }
          
        }
    }
           if ($request->isMethod('GET')) {
            extract($_GET);
          
            $reservation->setEtat("1");
            $em->persist($reservation);
            $em->flush();

        }
    
        
    return $this->render('GSTImmobilierBundle:Admin:save.html.twig',
    array("reservation"=> $reservation,"texts"=>$textcontrat ));
    return $this->redirectToRoute('save');
}

   public function pdfAction($id){
    $em = $this
    ->getDoctrine()
    ->getManager();
    $reservation= $em->getRepository('GSTImmobilierBundle:Reservation')->find($id);
    $textcontrat = $em->getRepository('GSTImmobilierBundle:textContrat')->findAll();

    return $this->render('GSTImmobilierBundle:Admin:pdf.html.twig',
    array("reservation"=> $reservation,"texts"=>$textcontrat));
   }
//    public function pdf1Action(Request $request)
//    {
// $snappy= $this ->get("knp_snappy.pdf");
// $html= $this->renderView("default/pdf.html.twig",
//                           array("title"=>"mon pdf"));

// $filename = "custom_pdf_from_twig";
// return new Response(
//    $snappy->getOutputFromHtml($html),
//    200,
//    array(
//        'content-type'=>'application/pdf',
//        'content-Disposition'=>'inline; filename"'.$filename.'.pdf"'
//    ));

//    }
   public function veilAction(){
    return $this->render('GSTImmobilierBundle:Admin:veil.html.twig',
    array());
 
}
public function ajoutBienAction(Request $request){
        $bien= new Bien();          
        $form= $this->createForm(BienType::class,$bien);
    //      if ($request->isMethod('POST')) {
    //     $form->HandleRequest($request);
    //     if ($form->isValid()) {
    //     $em= $this->getDoctrine()->getManager();       
    //     $em->persist($bien);
    //     $em->flush();
       
    //     }
    // }
    // $listbien = $em->getRepository('GSTImmobilierBundle:Bien')->findAll();
    // $listLocalite = $em->getRepository('GSTImmobilierBundle:Localite')->findAll();
    return $this->render('GSTImmobilierBundle:Admin:ajoutbien.html.twig',
    array("form"=>$form->createView()
       // ...
   ));
}
public function listbienproAction(){
    $em = $this
    ->getDoctrine()
    ->getManager();
    $listbienpro= $em->getRepository('GSTImmobilierBundle:BienPro')->findAll();
    return $this->render('GSTImmobilierBundle:Admin:listbienpro.html.twig',
    array('bienpros'=>$listbienpro));
}


public function ListreserveProAction(){ 
    $em =$this->getDoctrine()->getManager();
    $listresrv = $em->getRepository('GSTImmobilierBundle:Reserve_pro')->findBy(['etat'=>0]);
    return $this->render('GSTImmobilierBundle:Admin:listreservePro.html.twig',
    array( 'reserves' => $listresrv));

}  

//         public function etatreservationAction($id ){
//                 $em=$this->getDoctrine()
//                 ->getManager();
//                 $reservation=$em->getRepository('GSTImmobilierBundle:Reservation')->find($id);
//                 if($reservation->getEtat()==true){
//                     $reservation->setEtat(0);
//                 }else{
//                     $reservation->setEtat(1);
//                 }
//                 $em->flush();
//     return $this->redirectToRoute('listereserve');
// }

}