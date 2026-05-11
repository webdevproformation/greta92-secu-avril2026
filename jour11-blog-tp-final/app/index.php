<?php
session_set_cookie_params([
    'httponly' => true,
    'samesite' => 'Strict',
]);
session_start();

require_once __DIR__ . "/vendor/autoload.php"; 
/* require_once __DIR__ . "/src/Utils/Bdd.php";
require_once __DIR__ . "/src/Model/User.php";
require_once __DIR__ . "/src/Model/Article.php";
require_once __DIR__ . "/src/Controller/AbstractController.php";
require_once __DIR__ . "/src/Controller/AdminController.php";
require_once __DIR__ . "/src/Controller/SiteController.php";
require_once __DIR__ . "/src/Controller/ErreurController.php"; */

$router = new AltoRouter(); 

// permet de définir le dossier root qui contient notre projet si il est créé dans un sous dossier
// $_SERVER['BASE_URI'] => "/jour7-tp"

$router->setBasePath($_SERVER['BASE_URI'] ?? '');

$router->map("GET", "/", [
    "class" => "\App\Controller\SiteController",
    "method" => "home"
] , "home");

$router->map("GET|POST", "/login", [
    "class" => "\App\Controller\SiteController",
    "method" => "login"
] , "login");

$router->map("GET", "/article/[i:id]", [
    "class" => "\App\Controller\SiteController",
    "method" => "article"
] , "article");

$router->map("GET|POST", "/admin/article/new", [
    "class" => "\App\Controller\AdminController",
    "method" => "article_new"
] , "admin_article_new");

$router->map("GET|POST", "/admin/user/new", [
    "class" => "\App\Controller\AdminController",
    "method" => "user_new"
] , "admin_user_new");

$router->map("GET", "/logout", [
    "class" => "\App\Controller\SiteController",
    "method" => "logout"
] , "logout");

$match = $router->match(); 

//var_dump($match);

if($match){
    // créer le controller et la méthode qui va bien 

    $class = $match["target"]["class"];
    $method = $match["target"]["method"];
    $params = $match["params"];
    $p = new $class();
    call_user_func_array([ $p , $method  ] , $params);
    
}else {
    $p = new App\Controller\ErreurController();
    $p->erreur404(); 
}
 
// http://192.168.15.22/jour7-tp


// $router objet 
// qui contient une méthode map()
// qui prend 4 paramètres
// 1 méthode GET / POST
// 2 uri
// uri de la route / => home
// uri de la route /connexion => connexion
// uri de la route /article/:id => article 
// 3 tableau associatif => 3 clés => class à exécuter / méthode
// 4 string => nommer la route => dans les templates dans les balises a
