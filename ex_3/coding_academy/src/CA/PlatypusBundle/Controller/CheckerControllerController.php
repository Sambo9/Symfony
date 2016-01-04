<?php

namespace CA\PlatypusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CheckerControllerController extends Controller
{
    public function viewAction($name)
    {
        return $this->render('CAPlatypusBundle:CheckerController:view.html.twig', array(
        	'name' => $name
        	));
    }

}
