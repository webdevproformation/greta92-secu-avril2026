<?php 

namespace App\Utils ; 

use PDO ;
use Exception ; 

class Bdd {
    private PDO $connexion ;
    private static ?Bdd $instance = null;
    private function __construct()
    {
        try{

            $params = parse_ini_file(__DIR__ ."/../param.ini");

            $dsn="mysql:host={$params["BDD_HOST"]};dbname={$params["BDD_NAME"]};charset=utf8";
            $login = $params["BDD_LOGIN"];
            $password = $params["BDD_PASSWORD"]; 

            $this->connexion = new PDO($dsn , $login , $password);

        }catch( Exception $e ){
            echo "erreur 500 pb lors de la connexion à la bdd : " . $e->getMessage();
            die();
        }
    }
    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new Bdd();
        }
        return self::$instance->connexion ; 
    }
}