<?php 

// permet au fichier index.php de charger ce fichier
namespace App\Model ;


class Recettes
{

    /**
     * Récupérer toutes les recettes dans la table recettes
     */
    public function getAll()
    {
        $dsn = "mysql:host=database;dbname=blog";
        $login = "blog";
        $password = "blog";

        $connexion = new \PDO($dsn , $login , $password ) ;

        $requete = $connexion->query("SELECT * FROM recettes");

        return $requete->fetchAll(); 
    }

}