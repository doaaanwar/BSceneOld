<?php

namespace Acme\bsceneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

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
                $session = new Session();
                $session->start();
                $session->invalidate(50);
                $session->set('member',$user->getUsername());
                $session->set('memberId',$user->getId());
                if($user->getIsAdmin() == 1)
                {
                    
                    $session->set('admin','admin');
                }
               
                 //$user->getRoles();
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
