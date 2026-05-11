# Architecture 

- les dossiers / les fichiers qui composent le projet 

Dossiers 

- app / DANS ce dossier que vous allez travaillez 95%
- bdd / dump de la base de données 
    - fichier sql qui permet de créer la base de données ET les tables
    - et un peu les remplir
- mysql / => dossier qui est persisté par Docker  (pas été partagé sur github)

Fichiers 

- .gitignore : fichier de configuration de git qui permet de lister les dossiers les fichiers que je ne veux pas partager sur github

- docker-compose.yaml fichiers qui permettent de créer mes machines virtuelles
- Dockerfile 

README.md => quelques notes en + 

# le dossier app 

Dans ce dossier que vous allez passer 100% de votre temps

- public => fichier css / javascript 
- src => le dossier qui contient TOUTE LA LOGIQUE du site
- uploads => là où vous allez stocker les images téléchargés via le formulaire
- vendor => librairie PHP 

- index.php => le FRONT CONTROLLER de votre projet web 
    - LE POINT DE DEPART DE TOUTES LES REQUETES qui sont adressées à votre site 
    - Router / Dispatcher => 
        - reçoit le requête HTTP
        - et il va passer la main à un autre fichier du controller
    
    - MVC (app/src)
        - Model
        - Vue
        - Controller

Controller celui qui va générer le logique de la page
    AdminController => en charge du back
    SiteController => en charge du front 
Model : celui qui va discuter avec la base de données
    Article 
    User 
    autant que de table dans la base de données
Vue : html  et appeler le js et css 
    

        