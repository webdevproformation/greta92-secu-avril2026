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

    public function insert( $nom , $description , $imgPath )
    {
        $dsn = "mysql:host=database;dbname=blog";
        $login = "blog";
        $password = "blog";

        $connexion = new \PDO($dsn , $login , $password ) ;

        $stmt = $connexion->prepare("INSERT INTO recettes ( nom , description , imgPath ) VALUES ( :nom , :description , :imgPath ) ");

        $stmt->execute([
            "nom" => $nom,
            "description" => $description ,
            "imgPath" => empty( $imgPath ) ? "https://placehold.co/600x400" : $imgPath, 
        ]);
    }

}