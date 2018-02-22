<?php

namespace GST\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use GST\ImmobilierBundle\Entity\Typebien;
use GST\ImmobilierBundle\Entity\Bien;
use GST\ImmobilierBundle\Entity\Localite;
use GST\ImmobilierBundle\Entity\Client;
use GST\ImmobilierBundle\Entity\Image;
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
                                                              
                   if ($_POST['localite'] == '' && $_POST['typebien'] == ''  && $_POST['prix_loc'] == '') {
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
    public function reserverBienAction()
    {
        return $this->render('GSTImmobilierBundle:Front:reserver_bien.html.twig', array(
            // ...
        ));
    }

   /**
     * @Route("front/bien/login")
     */
    public function loginAction(Request $request)   //emailclient 
    {
      
        $em=$this->getDoctrine()
        ->getManager();
        $searchs=$em->getRepository('GSTImmobilierBundle:Client')->findAll();
        if($request->isMethod("POST"))
        {
            $emailclient=$request->get('emailclient');
            $searchs=$em->getRepository('GSTImmobilierBundle:client')->findBy(array('emailclient'=>$emailclient));
            if($searchs)
            {
                return $this->render('GSTImmobilierBundle:Front:reservation.html.twig', array(
                
                            // ...
                        ));
            }
        }
        return $this->render('GSTImmobilierBundle:Front:login.html.twig', array('users'=>$searchs

                    // ...
                ));
            }
            public function logupAction(Request $request)
            {
                // *******
        
                    $user= new Client();
                    $formUser=$this->createForm(ClientType::class,$user);
                    if($request->isMethod('POST')){
                    $formUser->handleRequest($request);
                if($formUser->isValid()){
                   $em= $this->getDoctrine()->getManager();
                   $user->setPassword('passer');
                   $em->persist($user) ;
            
                   $em->flush();
                //    return $this->redirectToRoute("logup");
                return $this->render('GSTImmobilierBundle:Front:list.html.twig');
                }
                    }       
        
        
                // ******
                return $this->render('GSTImmobilierBundle:Front:logup.html.twig', array(
                    "form"=>$formUser->createView()  // ...
                ));
            }

}