<?php

namespace Repository;

use src\Connexion;
use PDO;

class PersonneRepository{

    protected $pdo;

    public function __construct()
    {
        $this->pdo=Connexion::getInstance();
    
    }

    public function find($id){
        
    
    $stmt=$this->pdo->prepare("select * from personne where id=:id");
    $stmt->execute([':id'=>$id]);
    $personnes=$stmt->fetchAll(PDO::FETCH_CLASS,'Entity\Personne');
    return $personnes;
    }

    public function findAll(){
        
    
        $stmt=$this->pdo->prepare("select * from personne");
        $stmt->execute();
        $personnes=$stmt->fetchAll(PDO::FETCH_CLASS,'Entity\Personne');
        return $personnes;
        }
    

}