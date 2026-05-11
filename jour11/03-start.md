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


- créer le fichier .htaccess
- remplir le fichier index.php
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




