<?php

namespace GST\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use GST\ImmobilierBundle\Entity\Typebien;
use GST\ImmobilierBundle\Entity\Bien;
use GST\ImmobilierBundle\Entity\Localite;
use GST\ImmobilierBundle\Entity\Client;
use GST\ImmobilierBundle\Form\ClientType;
use Symfony\Component\HttpFoundation\Request;

class FrontController extends Controller
{
    /**
     * @Route("/bien/search")
     */
    public function searchBienAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $searchs=$em->getRepository('GSTImmobilierBundle:Bien')->findAll();

       if($request->isMethod("POST"))
       {
         $localite=$request->get('localite');
         $typebien=$request->get('typebien');
         $prix_loc=$request->get('prix_loc');
         $searchs = $em->getRepository(Bien::class)->findBienByValues($localite, $typebien,$prix_loc);
       }
       return $this->render('GSTImmobilierBundle:Front:layout.html.twig', array('biens'=>$searchs
       ));
            
    }
/**
     * @Route("front/bien/reserver")
     */
    public function reserverBienAction()
    {
        return $this->render('GSTImmobilierBundle:Front:reserver_bien.html.twig', array(
            // ...
        ));
    }
    public function listtypeAction( )
    {   
        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('GSTImmobilierBundle:Typebien');
//recupérer les données de la base de données0
        $listtype = $repository->findAll();               
       return $this->render('GSTImmobilierBundle:Front:layout.html.twig',
       array("types" => $listtype));

    }
    public function listlocaliteAction()
    {   

        $em=$this->getDoctrine()
        ->getManager();
        $searchs=$em->getRepository('GSTImmobilierBundle:Bien')->findAll();
        if($request->isMethod("POST"))
        {
            $login=$request->get('localite');
            $searchs=$em->getRepository('GSTImmobilierBundle:Bien')->findBy(array('localite'=>$localite));
            
        }
        return $this->render('GSTImmobilierBundle:Front:layout.html.twig', array('biens'=>$searchs

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
                   return $this->redirectToRoute("logup");
                }
                    }
        
        
        
                // ******
                return $this->render('GSTImmobilierBundle:Front:logup.html.twig', array(
                    "form"=>$formUser->createView()  // ...
                ));
            }
    
   
}