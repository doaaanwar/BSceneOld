<?php

/**
 * OrganizationController.php
 * controller used to manage operation on the organization object
 * 
 * Revision History:
 *      19.03.2015: created, doaa elfayoumi
 * 
 */

namespace Acme\bsceneBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class OrganizationController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmebsceneBundle:Default:organizationList.html.twig');
    }
}
