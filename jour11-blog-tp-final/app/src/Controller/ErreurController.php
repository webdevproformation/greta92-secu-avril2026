<?php 

namespace App\Controller;

class ErreurController extends AbstractController{
    public function erreur404(){
        http_response_code(404);
        $data = [];
        $data["h1"] = "Page d'erreur 404 - page introuvable";
        $this->render("404" , $data);
    }
}