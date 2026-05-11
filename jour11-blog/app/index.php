<?php 
// haut 
// créer la session version plus sécurisée
session_set_cookie_params([
    "httponly" => true ,    // access au cookie par js 
    "samesite" => 'Strict'  // vérifie que d'autres sites ne puissent utilisé
                            // accéder au cookie de session de votre site 
]);

session_start(); 

// charger tous les fichiers du projet 
// utilise composer 
require_once __DIR__ . "/vendor/autoload.php" ; 

// milieu // router 

$router = new AltoRouter(); // tableau 

$router->setBasePath($_SERVER["BASE_URI"] ?? ""); 

// adresse de la page d'accueil
// pour accéder à la page d'accueil il faut appeler l'adresse 
// http://localhost/ avec la méthode GET

$router->map("GET" , "/" , [
    "class" => "\App\Controller\SiteController",
    "method" => "home"
] , "home");  


// si une adresse appelée par le client est trouvé => match

$match = $router->match();

// fin du fichier 

if($match){
    // exécuter la méthode dans la class
    // si on appelle http://localhost/ 
    // exécuter la méthode home qui est stockée dans la class SiteController

    $class = $match["target"]["class"];
    $method = $match["target"]["method"];
    $params = $match["params"];

    $controller = new $class();
    // $controller = new SiteController();
    call_user_func_array([$controller, $method], $params);
    // $controller->home(1)

} else {
    // erreur 404 

}
