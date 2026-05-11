<?php 
namespace App\Controller ;
use App\Model\Article;
use App\Model\User ;

class SiteController extends AbstractController{
    public function home() :void {
        $data = [];
        $articleModel =  new Article();
        $data["articles"] = $articleModel->readAll();
        $data["h1"] = "Nos derniers articles à lire";
        $data["title"] = "page d'accueil";
        $this->render("home" , $data);
    }
    
    public function login() :void{
        $erreurs = [];

        if (isLoginBlocked()) {
            $erreurs[] = "Trop de tentatives. Réessayez dans " . getLoginBlockTime() . " secondes.";
        }

        if(!empty($_POST["email"]) && !empty($_POST["password"]) && empty($erreurs)){
            if (!validateCsrfToken($_POST['_csrf_token'] ?? null)) {
                $erreurs[] = "Session invalide, veuillez réessayer.";
            }

            $email = stripcslashes($_POST["email"]);
            $password = stripcslashes($_POST["password"]);

            if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
                //$erreurs[] = "email invalide"; 
                $erreurs[] = "identifiants invalides"; 
            }
                
            if(!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/", $password)){
                // $erreurs[] = "le password doit contenir 8 lettres avec au moins une majuscule et une minuscule et un chiffre ";
                $erreurs[] = "identifiants invalides"; 
            }

            $userModel = new User(); 
            $userRecherche = $userModel->readOneByEmail($email);
            if($userRecherche === false ){
                $erreurs[] = "email saisit n'existe pas !!";
            }

            if($userRecherche && !password_verify( $password , $userRecherche->getPassword() )){
                $erreurs[] = "password n'est pas valide !!";
            }

            if(empty($erreurs)){
                recordLoginAttempt(true);
                $_SESSION["user"] = $userRecherche ;
                global $router ;
                header("Location: " . $router->generate("admin_article_new"));
            } else {
                sleep(rand(0,2));
                recordLoginAttempt(false);
            }
        }
        $data = [];
        $data["erreur"] = $erreurs ; 
        $data["h1"] = "Accéder au back office du site";
        $this->render("login" , $data);
    }


    public function article(string $id):void
    {

        $article = new Article();

        if($article->get($id)){
            $data = [
                "article" => $article->get($id)
            ];

            $this->render("single" , $data);
            return ;
        }

        http_response_code(404);
        $data = [
            "h1" => "Page d'erreur 404 - page introuvable"
        ];

        $this->render("404" , $data);
        
    }

    public function logout()  :void{
        $_SESSION = [];
        session_destroy();
        global $router ;
        header("Location:" . $router->generate("login"));
    }
}