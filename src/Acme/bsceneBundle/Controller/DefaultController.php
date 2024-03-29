<?php

namespace Acme\bsceneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Encoder\BCryptPasswordEncoder;

class DefaultController extends Controller
{
    /**
     * 
     * @param type $name
     * @return type
     */
    public function indexAction($name)
    {
        return $this->render('AcmebsceneBundle:Default:index.html.twig', array('name' => $name));
    }
    
    //TODO function to get the list of days with events
  
    /**
     * doaa elfayoumi
     * function used for the login of member and admin 
     * @param Request $request
     * @return type
     */
    public function loginAction(Request $request)
    {
        
        if($request->getMethod()=='POST'){
            $session = $request->getSession();
            $session->clear();
            $username = $request->get('username');
            $password = $request->get('password');
            $em = $this->getDoctrine()->getEntityManager();
            
    
            
            $repository = $em->getRepository('\Acme\bsceneBundle\Entity\Account');
            
            //fetch user by username
            $user = $repository->findOneBy(array('username'=>$username));
            
            //username found
            if($user)
            {
                $verified = password_verify($password, $user->getPassword());
                if($verified)
                {
                    //$session = new Session();
                    //$session->start();
                    $session->invalidate(50);
                    $session->set('member',$user->getUsername());
                    $session->set('memberId',$user->getId());
                    if($user->getIsAdmin() == 1)
                    {

                        $session->set('admin','admin');
                        $session->set('lastLogin',$user->getLastLogin());
                        
                        //TODO save the current time for the last login of the admin or do it on the logout
                        
                        
                    }

                     
                     return $this->render('AcmebsceneBundle:Default:index.html.twig',array('name' => $user->getUsername()));
                }
                else
                {
                    //password doesn't match
                   return $this->render('AcmebsceneBundle:Default:index.html.twig',array('errormessage' => 'uncorrect password'));
                }
            }
            else
            {
                 
                 return $this->render('AcmebsceneBundle:Default:index.html.twig',array('errormessage' => 'login failed'));
             
            }
        }
        else
        {
             return $this->render('AcmebsceneBundle:Default:index.html.twig');
        }
    }
}
