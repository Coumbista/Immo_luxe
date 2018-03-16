<?php

namespace GST\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use GST\ImmobilierBundle\Entity\Typebien;
use GST\ImmobilierBundle\Entity\Bien;
use GST\ImmobilierBundle\Entity\BienPro;
use GST\ImmobilierBundle\Entity\Proprietaire;
use GST\ImmobilierBundle\Entity\Localite;
use GST\ImmobilierBundle\Entity\Client;
use GST\ImmobilierBundle\Entity\Image;
use GST\ImmobilierBundle\Entity\Imagepro;
use GST\ImmobilierBundle\Entity\Reserve_pro;
use GST\ImmobilierBundle\Entity\Reservation;
use GST\ImmobilierBundle\Form\ClientType;
use GST\ImmobilierBundle\Form\ProprietaireType;
use GST\ImmobilierBundle\Form\BienProType;
use Symfony\Component\HttpFoundation\Request;

class FrontController extends Controller
{
    /**
     * @Route("/bien/search")
     */
    public function searchBienAction(Request $request)
    {         

                    $em = $this->getDoctrine()->getManager();
                    // $bien=new Bien();
                    $listbien = $em->getRepository('GSTImmobilierBundle:Bien')->findBy(['etat'=>0]);
                    $bien=$this->get('knp_paginator')->paginate($listbien,$request->query->get('page',1),6);
                    $listType = $em->getRepository('GSTImmobilierBundle:Typebien')->findAll();
                    $listLocalite = $em->getRepository('GSTImmobilierBundle:Localite')->findAll();
                
                        if ($request->isMethod('POST')) {
                        if ($_POST['localite'] != '' && $_POST['typebien'] != '' && $_POST['prix_loc'] != ''  ) {
                            $listbien = $em->getRepository('GSTImmobilierBundle:Bien')->findBienByValues($_POST['localite'], $_POST['typebien'],$_POST['prix_loc']);   
                        }
                
                    }
                
                    return $this->render('GSTImmobilierBundle:Front:search_bien.html.twig', 
                    array('biens' => $bien, 'types' => $listType, 'localites' => $listLocalite,
                    ));
                }

                            public function resultatAction(){
                                $em = $this->getDoctrine()->getManager();

                                $listType = $em->getRepository('GSTImmobilierBundle:Typebien')->findAll();
                                $listLocalite = $em->getRepository('GSTImmobilierBundle:Localite')->findAll();
                                $listbien = $em->getRepository('GSTImmobilierBundle:Bien')->findAll();
                                return $this->render('GSTImmobilierBundle:Front:reserver_bien.html.twig', array(  'biens' => $listbien,
                                'types' => $listType, 'localites' => $listLocalite,
                                ));
                            
                            }
                        
            
/**
     * @Route("front/bien/reserver")
     */
                      public function reserverBienAction(Request $request,$id )
                 {
        
            
                   $em = $this->getDoctrine()->getManager();
                   $listbien = $em->getRepository('GSTImmobilierBundle:Bien')->find($id);
                   $listimage = $em->getRepository('GSTImmobilierBundle:Image')->find($id);
                   $listType = $em->getRepository('GSTImmobilierBundle:TypeBien')->findAll();
                   $listLocalite = $em->getRepository('GSTImmobilierBundle:Localite')->findAll();
                   
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
                            //  echo'votre reservation a été prise en compte';
                               return $this->render('GSTImmobilierBundle:Front:reserver.html.twig');
                           }
                       } 
                    
                       else
                        {
                           $form->HandleRequest($request);
                           if ($form->isSubmitted() && $form->isValid()) 
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
                       return $this->render('GSTImmobilierBundle:Front:reservation.html.twig', array("bien"=>$listbien,"images"=> $listimage,"users"=>$client,
                       'types' => $listType, 'localites' => $listLocalite,   "form"=>$form->createView())); 
                   
                    }

                    //lister les biens de almadie
                            public function AlmadieAction(){
                            $em = $this->getDoctrine()->getManager();
                            $listbien = $em->getRepository('GSTImmobilierBundle:Bien')->findBy(['localite'=>3]);
                            $listType = $em->getRepository('GSTImmobilierBundle:TypeBien')->findAll();
                            $listLocalite = $em->getRepository('GSTImmobilierBundle:Localite')->findAll();
                    
                            return $this->render('GSTImmobilierBundle:Front:almadie.html.twig', array(  'biens' => $listbien,
                            'types' => $listType, 'localites' => $listLocalite,
                            ));
        }

        //lister les biens de mariste
                    public function MaristeAction(){
                        $em = $this->getDoctrine()->getManager();
                        $listbien = $em->getRepository('GSTImmobilierBundle:Bien')->findBy(['localite'=>1]);
                        $listType = $em->getRepository('GSTImmobilierBundle:TypeBien')->findAll();
                        $listLocalite = $em->getRepository('GSTImmobilierBundle:Localite')->findAll();
                
                        return $this->render('GSTImmobilierBundle:Front:mariste.html.twig', array(  'biens' => $listbien,
                        'types' => $listType, 'localites' => $listLocalite,
                        ));
                    }
    
         public function logupAction(Request $request)
            {
        
                    $user= new Client();
                    $form=$this->createForm(ClientType::class,$user);
                    if($request->isMethod('POST')){
                    $form->handleRequest($request);
                if($form->isValid()){
                   $em= $this->getDoctrine()->getManager();
                   $user->setPassword('passer');
                   $em->persist($user) ;
            
                   $em->flush();
                    return $this->redirectToRoute("logup");
                return $this->render('GSTImmobilierBundle:Front:list.html.twig');
                }
            }
        
        
                        // ******
                return $this->render('GSTImmobilierBundle:Front:logup.html.twig', array(
                    "form"=>$form->createView()  // ...
                )); }
        
            //     public function SaveProAction(Request $request){
            //         $em = $this->getDoctrine()->getManager();
            //         $listType = $em->getRepository('GSTImmobilierBundle:Typebien')->findAll();
            //         $listLocalite = $em->getRepository('GSTImmobilierBundle:Localite')->findAll();
            //         // $bienPro= new BienPro();
            //         // $form=$this->createForm(BienProType::class,$bienPro);
            //         return $this->render('GSTImmobilierBundle:Front:pro.html.twig',
            //         array(  'types' => $listType, 'localites' => $listLocalite,
            //     ));
            // }
            public function SaveProAction(Request $request){
                    $em =$this->getDoctrine()->getManager();
                    $listType = $em->getRepository('GSTImmobilierBundle:Typebien')->findAll();
                    $listLocalite = $em->getRepository('GSTImmobilierBundle:Localite')->findAll();
                    if($request->isMethod('POST')){
                    if (isset($_POST['submit']))
                                {
                                    extract($_POST);
                                    //var_dump($submit);die();
                                    $tbien=new Typebien();
                                    $tbien->setLibelletype($_POST['typebien']);
                                    $em->persist($tbien);
                                   $em->flush();
                
                               $local=new Localite();
                               $local->setLibelleloca($_POST['localite']);
                               $em->persist($local);
                                $em->flush();
                            

                               $pro = new Proprietaire();
                               $pro->setNumpiece($numpiece);
                               $pro->setNomcomplet($nomcomplet);
                               $pro->setAdressepro($adressepro);
                               $pro->setTelPro($telpro);
                               $pro->setEmailPro($emailpro);
                               $pro->setCodebanque($codebanque);
                               $em->persist($pro);
                               $em->flush();
                               
                               $img= new Imagepro();
                               $img->setImage($image);
                               $img->setBienPro($bien);
                               $em->persist($img);
                               $em->flush();
                              
        
                               $bien=new BienPro();
                               $bien->setNom($nom);
                               $bien->setDescription($description);
                               $bien->setMontantvoulu($montantvoulu);
                               $bien->setEtat(0);
                               $bien->setIdparent($idparent);
                               $bien->setLocalite($local);
                               $bien->setTypebien($tbien);
                               $bien->setProprietaire($pro);
                               $em->persist($bien);
                               $em->flush();

                               $reserv= new Reserve_pro();
                               $reserv->setDateReservation(new \DateTime());
                               $reserv->setEtat(0);
                               $reserv->setProprietaire($pro);
                               $reserv->setBienPro($bien);
                               $em->persist($reserv);
                               $em->flush();
                               //$bien=$em->getRepository(Bien::class)->find($idbien);
        
                              
                                }
                                
                            }
                               
                     return $this->render('GSTImmobilierBundle:Front:pro.html.twig',
                    array('types' => $listType, 'localites' => $listLocalite,));
                        
                            

                }  
              
}