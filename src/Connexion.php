<?php

namespace src;

use \PDO;
use PDOException;

class Connexion {
    private static $pdo;

    public static function getInstance(){
        if(self::$pdo==null){
            try{
                $path=__DIR__.'\..\DBCOnfig.json';
                $content=file_get_contents($path);
                $content=json_decode($content);
                $pdo=new PDO("mysql:host=".$content->host.";dbname=".$content->dbname,$content->username,$content->password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e){
                echo $e->getMessage();
            }
            self::$pdo=$pdo;
        }
        
    
    return self::$pdo;
    }
}