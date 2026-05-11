# je veux créer un site internet

- Serveur ??? 

j'ai juste besoin de PHP

```sh
php -S localhost:1234
```

=> ça fonctionne uniquement si tu n'as pas besoin de module de Apache => mod_rewrite

Vous avez besoin :

- Windows => WAMP XAMPP  LARAGON
- MacOS => MAMP
- Linux => LAMP 
- Linux de L'école Machine Virtuelle 

    - PHP 8.2
    - avec 3 extensions de PHP => gd (image) imagick pdo
        - gd et imagick permet de créer des images avec PHP
        - pdo permet de faire communiquer votre PHP avec la base de données 
    - MySQL (ou Mariadb) la base de données 
    - phpMyAdmin => permet de voir plus facilement la base de données / et la manipuler
    - pour Apache
        - permettre le mod_rewrite (activer le module Apache avec `a2enmod rewrite`) 
        - modifier le vhost `/etc/apache2/sites-available/000-default.conf`

```
AllowOverride
Require all granted
```

- Docker  
 
# Créer l'arborescence des dossiers

```txt
app/
    public/
    src/
        Controller/
        Model/
        Vue/
    uploads/
    index.php
bdd/

docker-compose.yaml
```

# Créer notre première page 

page d'accueil de notre site internet 


- [x] créer le fichier .htaccess
- [] remplir le fichier index.php
- Créer le fichier SiteController.php
- fichier .env 
- Créer le fichier Bdd.php (discuter avec la base)
- Créer le fichier Recette.php  (discuter avec la base)
- Créer les fichiers de vue 
        - header.tpl.php
        - home.tpl.php
        - footer.tpl.php


## .htaccess

dans le dossier app/ créer le fichier .htaccess (à côté du fichier index.php)

```txt
# si le module rewrite de Apache est activé 
RewriteEngine On

# ignore tous les dossiers existants / fichiers  existants
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
# TOUTE DOIT être dirigé vers le fichier index.php
RewriteRule ^(.*)$ index.php [QSA,L]

# ce fichier GARANTIT que Apache va appeler le fichier index.php sur toutes les demandes 

# http://localhost/uploads
# http://localhost/index.php
# http://localhost/
# http://localhost/accueil
# http://localhost/tutu
```

# Dans le fichier .htaccess => CSP

Content Security Policy 

le serveur va donner des directives au client dans des entêtes https
OU il peut récupérer et exécuter du javascript / css / image .... 

technique qui permet de bloquer les attaques js => XSS 

dès le fichier .htaccess => ajouter des entêtes CSP 

Attention, si vous voulez utiliser d'autres sources pour vos js et vos css => il faudra OBLIGATOIREMENT modifier la directive suivante :

```txt
Header set Content-Security-Policy "default-src 'self'; script-src 'self' https://cdn.jsdelivr.net; style-src 'self' https://cdn.jsdelivr.net https://fonts.googleapis.com; font-src https://fonts.gstatic.com https://fonts.googleapis.com; img-src 'self' https://placehold.co; connect-src 'self'; form-action 'self';  frame-ancestors 'none'"
```
par défaut tout fichier js / css doit venir du serveur 
sauf exceptions : script-src ('self') et https://cdn.jsdelivr.net



# index.php

dans le fichier index.php 3 parties principales

// debut 
- créer une SESSION car le site internet a un espace privé (back office) 
- charger l'ensemble des fichiers php du projet 
    - (autoloader)

// milieu 
// router 
le fait d'associer une adresse internet à une fonction 

http://localhost/contact   <=>   associer le fonction contact() / 
                                        dans le fichier SiteController.php

http://localhost/login    <=>   associer la fonction login() /
                                        dans le fichier SiteController.php


http://localhost/admin/add/user <=> associer la fonction addUser() /    
                                        dans le fichier AdminController.php

// fin 

Exécuter la fonction concernée 

ET SI la route n'est pas listée dans vos associations => ERREUR 404 


