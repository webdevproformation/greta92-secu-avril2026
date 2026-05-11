<?php 
namespace App\Controller;
use App\Model\Article ;
use App\Model\User ; 

class AdminController  extends AbstractController{

    public function __construct()
    {
        if(!isset($_SESSION["user"])){
            http_response_code(403);
            $data["h1"] = "Page d'erreur 403, vous devez vous connecter pour pouvoir accéder à cette page !";
            $this->render("403", $data); 
            die(); 
        }
    }

    public function article_new(){
        $erreur = []; 
        $articleModel = new Article();
        if(!empty($_POST)){
            if (!validateCsrfToken($_POST['_csrf_token'] ?? null)) {
                $erreur[] = "Session invalide, veuillez réessayer.";
            }

            $titre = trim($_POST["titre"]);
            $contenu = trim($_POST["contenu"]);

            if(strlen($titre ) < 3 || strlen($titre) > 255){
                $erreur[] = "le titre doit contenir entre 3 et 255 lettres";
            }

            if(strlen($contenu ) < 3 || strlen($contenu) > 65000){
                $erreur[] = "le contenu doit contenir entre 3 et 65000 lettres";
            }   

            $imgPath = null;
            if (!empty($_FILES['img']['name'])) {
                $file = $_FILES['img'];
                $allowedTypes = ['image/jpeg', 'image/png'];
                $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
                $allowedExt = ["jpg", "jpeg" ,"png"];
                $maxSize = 2 * 1024 * 1024;
                $uploadedType = $file[ 'type' ];
                $uploadedTmp  =  $file[ 'tmp_name' ];

                if ($file['error'] !== UPLOAD_ERR_OK) {
                    $erreur[] = "Erreur lors de l'upload de l'image.";
                } elseif ($file['size'] > $maxSize) {
                    $erreur[] = "L'image ne doit pas dépasser 2 Mo.";
                } elseif (
                        !in_array($file['type'], $allowedTypes) || 
                        !getimagesize( $uploadedTmp ) ||
                        !in_array( $ext , $allowedExt)
                    )  {
                    $erreur[] = "Format d'image non autorisé (jpeg, png uniquement).";
                } else {
                    
                    $filename = bin2hex(random_bytes(16)) . '.' . $ext;
                    $dest = __DIR__ . '/../../uploads/' . $filename;

                    // Strip any metadata, by re-encoding image (Note, using php-Imagick is recommended over php-GD)
                    if( $uploadedType == 'image/jpeg' ) {
                        $img = \imagecreatefromjpeg( $uploadedTmp );
                        imagejpeg( $img, $dest , 100);
                        unset( $img );
                        $imgPath = 'uploads/' . $filename;
                    }
                    else if( $uploadedType == 'image/png' ) {
                        $img = \imagecreatefrompng( $uploadedTmp );
                        imagepng( $img, $dest , 9);
                        unset( $img );
                        $imgPath = 'uploads/' . $filename;
                    }else {
                        $erreur[] = "Impossible de sauvegarder l'image.";
                    }
                    
                }
            }
            
            $articleModel->setTitre($titre)
                         ->setContenu($contenu)
                         ->setImg($imgPath); 
            if(empty($erreur)){
                $articleModel->create();
                global $router ;
                header("Location:". $router->generate("home"));
            }
        }
        $data = [];
        $data["h1"] = "créer un nouvel article";
        $data["title"] = "créer un nouvel article";
        $data["erreur"] = $erreur;
        $data["article"] = $articleModel ; 
        $this->render("article_new", $data); 
    }

    public function user_new(){
        $erreur = [];
        if(!empty($_POST["email"]) && !empty($_POST["password"])){
            if (!validateCsrfToken($_POST['_csrf_token'] ?? null)) {
                $erreur[] = "Session invalide, veuillez réessayer.";
            }

            $email = trim($_POST["email"]);
            $password = trim($_POST["password"]);

            // série de tests 
            // email valide
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $erreur[] = "email invalide"; 
            }

            // password contient 8 lettres avec majuscule et minuscule et un chiffre 
            // regex (?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}
            if(!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/", $password)){
                $erreur[] = "le password doit contenir 8 lettres avec au moins une majuscule et une minuscule et un chiffre ";
            }
             // est ce que il n'y a pas déjà un projet user avec le mail saisi 
            $userModel = new User(); 
            if($userModel->isUnique($email) !== 0){
                $erreur[] = "le mail saisit est déjà utilisé, veuillez choisir une autre email"; 
            }
            
            $passwordHashed = password_hash($password ,  PASSWORD_BCRYPT );

            $userModel->setEmail($email)
                ->setPassword($passwordHashed)
                ->setRole("admin");
            // si il n'y a pas d'erreur 
            if(empty($erreur)){
                // create 
                $userModel->create();
                global $router ;
                header("Location:" . $router->generate("home"));
            }
        }
        $data = [];
        $data["h1"] = "créer un nouveau profil gestionnaire"; 
        $data["erreur"] = $erreur ; 
        $this->render("user_new" , $data); 
    }
} 