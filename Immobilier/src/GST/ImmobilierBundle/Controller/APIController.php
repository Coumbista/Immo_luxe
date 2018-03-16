<?php

namespace GST\ImmobilierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use GST\ImmobilierBundle\Entity\Client;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;



class APIController extends Controller
{
    /**
     * @Route("/API/add")
     *  @Method({"POST"})
     */
    public function addAction(Request $request)
    {
        $data = $request->getContent();
        $clients = $this->get('jms_serializer')->deserialize($data, 'GST\ImmobilierBundle\Entity\Client','json');
       
       
        
        // var_dump($client);die();
        $em = $this->getDoctrine()->getManager();
        $em->persist($clients);
        $em->flush();
        return new Response('', Response::HTTP_CREATED);
       
      
    }

    /**
     * @Route("/API/edit")
     */
    public function editAction()
    {
        return $this->render('GSTImmobilierBundle:API:edit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/API/update")
     */
    public function updateAction()
    {
        return $this->render('GSTImmobilierBundle:API:update.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/API/update")
     */
    public function deleteAction()
    {
        return $this->render('GSTImmobilierBundle:API:delete.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/API/all")
     * @Method({"GET"})
     */
    public function allAction()
    {
        $clients = $this->getDoctrine()->getRepository('GSTImmobilierBundle:Client')->findAll();
       
       
            if(!count($clients)){
                $response =array(
                    "code"=>false,
                    "msg"=>"liste des client",
                    "error"=>null,
                    "data"=>null,
                   
                );
                return new JsonResponse($response);
            }  
                
            $data = $this->get('jms_serializer')->serialize($clients, 'json'); 

                $response =array(
                    "code"=>true,
                    "msg"=>"liste des client",
                    "error"=>null,
                    "data"=>json_decode($data)
                );
                return new JsonResponse($response,Response::HTTP_OK  );
            
     
        // $response->headers->set('Content-Type', 'application/json');

       
        
        // return $this->render('GSTImmobilierBundle:API:all.html.twig', array(
          
    
    }

}
