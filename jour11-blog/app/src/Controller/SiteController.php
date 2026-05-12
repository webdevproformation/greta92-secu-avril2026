<?php 

namespace App\Controller ;

class SiteController
{
    /**
     * fonction en charge d'appeler les fichiers de VUE (html)
     *
     * @param [type] $tplName le nom du fichier tpl
     * @param array $data données envoyées à la vue par défaut tableau vide
     * @return void
     */
    private function render( $tplName , $data = [] )
    {
        require_once __DIR__ . "/../Vue/header.tpl.php";
        require_once __DIR__ . "/../Vue/$tplName.tpl.php";
        require_once __DIR__ . "/../Vue/footer.tpl.php";
    }

    public function home()
    {
        //echo "bonjour !! comment allez vous ??";

        $data = [
            [ 
                "nom" => "banane flambée" , 
                "description" => "lorem"  ,
                "img" => "https://placehold.co/600x400" 
            ],
            [ 
                "nom" => "pain perdu" , 
                "description" => "lorem"  ,
                "img" => "https://placehold.co/600x400" 
            ],
            [ 
                "nom" => "tarte aux abricots" , 
                "description" => "lorem"  ,
                "img" => "https://placehold.co/600x400" 
            ],
        ];

        $this->render("home" , $data); 
        // http://localhost:8090
        // apache => vhost => /app => 
        // .htaccess => index.php 
        // altorouter => exécuter la méthode home
    }

}