<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use \AppBundle\Model\Film;

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
     * @Route("/film", name="film_array")
     */
    public function indexArrayAction(){
        $films = $this->get('filmdao')->findAll();
        return $this->render('default/film-list.html.php', array('films' => $films));
    }
    
    /**
     * @Route("/film2", name="film_object")
     */
    public function indexObjectAction(){
        $films = $this->get('filmdao')->findAllObjects();
        return $this->render('default/film-list.html.twig', array('films' => $films));
    }
    
    /**
     * @Route("/film3", name="film_object2")
     */
    public function indexObject2Action(){
        $films = $this->get('filmdao')->findAllObjects2();
        return $this->render('default/film-list2.html.twig', array('films' => $films));
    }
    
}
