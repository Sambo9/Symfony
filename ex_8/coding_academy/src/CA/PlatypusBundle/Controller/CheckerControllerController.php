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
    public function indexAction()
    {
        return $this->render('CAPlatypusBundle:CheckerController:index.html.twig');
    }
    public function loginAction()
    {
      return $this->render('CAPlatypusBundle:CheckerController:login.html.twig',array('email' => $_POST["email"],'password' => $_POST["password"]));
    }
}
