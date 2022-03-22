<?php

require 'vendor/autoload.php';

use Repository\PersonneRepository;
use src\Connexion;

try{
    // $pdo=new PDO("mysql:host=localhost;dbname=exercice1","root","");
    // $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $personneRepo= new PersonneRepository();
    $personnes=$personneRepo->find(6);
    var_dump($personnes);
    $personnes2=$personneRepo->findAll();
    var_dump($personnes2);
    
}
catch(PDOException $e){
    echo $e->getMessage();
}