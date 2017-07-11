<?php
namespace AppBundle\Model\Dao;

use AppBundle\Model\Film;
use AppBundle\Model\Author;
use PDO;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FilmDAO
 *
 * @author lionel
 */
class FilmDAO {
   
    
    private $pdo;

    //$pdo is injected by symfony @see services.yml
    public function __construct(PDO $pdo)
    {
            $this->pdo = $pdo;
    }
    
    /**
     * exemple simplifié avec des tableaux associatifs
     * @return type
     */
    public function findAll(){


        $stmt = $this->pdo->query('SELECT *  from film');
        $res =  $stmt->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($res);
        return $res;
        
    }
    
    /**
     * exemple d'utilisation objet, PDO construit automatiquement les objets films et les alimentent via les setters
     * par contre il n'est pas possible automatiquement de construire un graph d'objet, il faut le faire soi même
     * @return type
     */
    public function findAllObjects(){
        $stmt = $this->pdo->query('SELECT *  from film');
        $res =  $stmt->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Film::class);
        return $res;
    }
    
    /**
     * exemple rapatriement objet avec jointure
     * @return type
     */
    public function findAllObjects2(){
        $stmt = $this->pdo->query('SELECT film.id, film.title, author.id as authid, author.name as authname  from film INNER JOIN author ON film.author_id = author.id');
        $films = [];
        while ($res =  $stmt->fetch(PDO::FETCH_OBJ)){
            $film = new Film();
            $film->setId($res->id);
            $film->setTitle($res->title);
            
            $author = new Author();
            $author->setId($res->authid);
            $author->setName($res->authname);
            
            $film->setAuthor($author);
            $films[] = $film;
        }
        return $films;
    }
	
    
}
