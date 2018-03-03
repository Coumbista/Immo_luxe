<?php

namespace GST\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use GST\ImmobilierBundle\Entity\Typebien;
use GST\ImmobilierBundle\Entity\Bien;
use GST\ImmobilierBundle\Entity\Localite;
use GST\ImmobilierBundle\Entity\Client;
use GST\ImmobilierBundle\Entity\Image;
use GST\ImmobilierBundle\Entity\Reservation;
use GST\ImmobilierBundle\Form\ClientType;
use Symfony\Component\HttpFoundation\Request;

class FrontController extends Controller
{
    /**
     * @Route("/bien/search")
     */
    public function searchBienAction(Request $request)
    {
       
                
        $em = $this->getDoctrine()->getManager();
        
                if ($request->isMethod('POST')) {             
                                                              
                   if ($_POST['localite'] == '' && $_POST['typebien'] == '' && $_POST['prix_loc'] == ''   ) {
                       $listbien = $em->getRepository('GSTImmobilierBundle:Bien')->findAll();
                    } else {
                        $listbien = $em->getRepository('GSTImmobilierBundle:Bien')->findBienByValues($_POST['localite'], $_POST['typebien'], $_POST['prix_loc']);
                    }
                } else {
                    $listbien = $em->getRepository('GSTImmobilierBundle:Bien')->findAll();
                }
                $listType = $em->getRepository('GSTImmobilierBundle:Typebien')->findAll();
                $listLocalite = $em->getRepository('GSTImmobilierBundle:Localite')->findAll();
            
                return $this->render('GSTImmobilierBundle:Front:search_bien.html.twig', array(
                'biens' => $listbien, 'types' => $listType, 'localites' => $listLocalite,
                ));}
      
            
/**
     * @Route("front/bien/reserver")
     */
    public function reserverBienAction(Request $request,$id )
    {
        
            
                   $em = $this->getDoctrine()->getManager();
                   $listbien = $em->getRepository('GSTImmobilierBundle:Bien')->find($id);
                   $client = new Client();
                   $form = $this->createForm(ClientType::class, $client);
            
                   if ($request->isMethod('POST')) 
                   {
                       if (isset($_POST['submit']))
                        {
                           $user = $em->getRepository('GSTImmobilierBundle:Client')
                           ->findBy(['email' => $_POST['emailclient'], 'motdepasse' => $_POST['password']]);
                           if ($user) {
                               $reserve = new Reservation();
                               $reserve->setDateReservation(new \DateTime());
                               $reserve->setEtat(0);
                               $reserve->setClient($user);
                               $reserve->setBien($listbien);
                               $em->persist($reserve);
                               $em->flush();
            
                               return $this->render('GSTImmobilierBundle:Front:reserver.html.twig');
                           }
                       } 
                    
                       else
                        {
                           $form->HandleRequest($request);
                           if ($form->isValid()) 
                           {
                               $em->persist($client);
            
                               $reserv = new Reservation();
                               $reserv->setDateReservation(new \DateTime());
                               $reserv->setEtat(0);
                               $reserv->setClient($client);
                               $reserv->setBien($listbien);
                               $em->persist($reserv);
                               $em->flush();
                           }
            
                           return $this->render('GSTImmobilierBundle:Front:reserver.html.twig');
                       }
                    }
                       return $this->render('GSTImmobilierBundle:Front:reservation.html.twig', array(
                        "form"=>$form->createView())); 
                   
                    }
    
        //  public function logupAction(Request $request)
        //     {
        
        //             $user= new Client();
        //             $form=$this->createForm(ClientType::class,$user);
        //             if($request->isMethod('POST')){
        //             $form->handleRequest($request);
        //         if($form->isValid()){
        //            $em= $this->getDoctrine()->getManager();
        //            $user->setPassword('passer');
        //            $em->persist($user) ;
            
        //            $em->flush();
        //         //    return $this->redirectToRoute("logup");
        //         return $this->render('GSTImmobilierBundle:Front:list.html.twig');
        //         }
        //             }    
        
        //                 // ******
        //         return $this->render('GSTImmobilierBundle:Front:logup.html.twig', array(
        //             "form"=>$formUser->createView()  // ...
        //         )); }
               

}