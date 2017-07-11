<?php
namespace AppBundle\Model;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Film
 *
 * @author lionel
 */
class Film {
    
    
    private $id;
    private $title;
    private $author;
    
    
    function getId() {
        return $this->id;
    }

    function getTitle() {
        return $this->title;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function getAuthor() {
        return $this->author;
    }

    function setAuthor($author) {
        $this->author = $author;
    }



}
