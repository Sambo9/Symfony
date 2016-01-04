<?php

namespace CA\PlatypusBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

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
      // $session = new Session();
      // $session->getFlashBag()->get('checked');
      // var_dump($session);
      // echo "<br>";
      // echo "<br>";
      // var_dump($session->getFlashBag());

      return $this->render('CAPlatypusBundle:CheckerController:index.html.twig');
    }
    public function loginAction()
    {


      if($_POST["email"] == "Platypus" && $_POST["password"] == "awesome")
      {
        $this->addFlash('notice','Login success !');
        //$session->getFlashBag()->add('checked', "Login success !");
      }
      else {
        $this->addFlash('notice','Login failure !');
        //$session->getFlashBag()->add('checked', "Login failure !");
      }
      return $this->render('CAPlatypusBundle:CheckerController:index.html.twig');
      //return $this->redirectToRoute('index');
    }
}
