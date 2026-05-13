# projet informatique web

PHP
Python 
Java

=> écrire ton code 
=> il faut le mettre dans un ordinateur qui contient un compilateur 
=> en plus du compilateur tu vas avoir besoin de mettre en place des options en plus => Base de données

=> tu vas avoir besoin de mettre en un environnement (machine) pour ton code 

=> XAMPP 
=> Virtual Box => iso => connecté => apt => modifier manuelle le virtual Host .... (Pascal)
=> Docker 
    - installer docker 
    - docker-compose.yaml => fichier Orchestration 
    - Dockerfile => créer ta machine (conteneur) sur mesure

```sh
# créer les conteneurs
cd jour13
docker compose up -d --build
# supprimer les conteneurs 
docker compose down
```

# Rappel 

http://localhost:8090

Apache => .htaccess => index.php => SiteController contenant la fonction home => 

AltoRouter

$router->map("GET" , "/" , [
    "class" => "\App\Controller\SiteController",
    "method" => "home"
] , "home");
    
=> GET , "/"   ======> exécuter le fichier 


Le Controller => le chef d'orchestre 

    => demande des informations à la base de données 
    => appeler la VUE fichiers qui contiennent du html 



    