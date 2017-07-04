<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig');

    }
    
    
    /**
     * affichage de la page1
     * @Route("/page1", name="page1")
     * @return \AppBundle\Controller\Response
     */
    public function affichePage2(Request $request){
        $name = $request->query->get('name');
        return $this->render('default/page1.html.twig', array('name'=> $name));
        //return new Response('kikou '.$name);
    }
    
      /**
     * affichage de la page1
     * @Route("/page2", name="page2")
     * @return \AppBundle\Controller\Response
     */
    public function affichageSansTwig(Request $request){
        $name = $request->query->get('name');
        $tbl = array('name'=>'Duss', 'firstname' => 'Jean Claude');
        return $this->render('default/page2.html.php', array('name' => $name, 'tbl' => $tbl));
    }
    
    
    /**
     * exemple d'appel bdd en utilisant des services (pas d'orm
     * @Route("/testbdd", name="testbdd")
     */
    public function testBDD(){
        $films = $this->get('filmdao')->findAll();
        return $this->render('default/film-list.html.php', array('films' => $films));
    }
}
