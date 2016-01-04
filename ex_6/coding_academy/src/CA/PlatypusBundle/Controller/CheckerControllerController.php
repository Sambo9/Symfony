<?php

namespace CA\PlatypusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CheckerControllerController extends Controller
{
    public function viewAction($name, $id)
    {
		return $this->render('CAPlatypusBundle:CheckerController:view.html.twig', array(
    	'name' => $name,
    	'id' => $id
    	));
    }
    public function showParamsAction()
    {

    	return $this->render('CAPlatypusBundle:CheckerController:showParams.html.twig',array('tab' => $_GET));
    }

}
