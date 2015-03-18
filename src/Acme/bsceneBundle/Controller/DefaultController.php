<?php

namespace Acme\bsceneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmebsceneBundle:Default:index.html.twig', array('name' => $name));
    }
    
    
    public function adminIndexAction()
    {
        return $this->render('AcmebsceneBundle:Default:adminIndex.html.twig');
    }
    
     public function loginAction(Request $request)
    {
        
        if($request->getMethod()=='POST'){
            $username = $request->get('username');
            $password = $request->get('password');
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('\Acme\bsceneBundle\Entity\Account');
            $user = $repository->findOneBy(array('username'=>$username,'password'=>$password));
            if($user)
            {
                 return $this->render('AcmebsceneBundle:Default:index.html.twig',array('name' => $user->getUsername()));
            }
            else
            {
                 return $this->render('AcmebsceneBundle:Default:index.html.twig',array('name' => 'login failed'));
            }
        }
       
       
        else
        {
             return $this->render('AcmebsceneBundle:Default:index.html.twig');
        }
    }
}
