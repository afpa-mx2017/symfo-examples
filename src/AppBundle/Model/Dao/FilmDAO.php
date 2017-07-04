<?php
namespace AppBundle\Model\Dao;

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
    
    public function findAll(){


        $stmt = $this->pdo->query('SELECT *  from film');
        $res =  $stmt->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($res);
        return $res;
        
    }
	
    
}
