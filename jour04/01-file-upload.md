# File Upload

## low 

=> vous êtes sur un site internet qui vous propose de télécharger un fichier depuis votre ordinateur
=> normalement: image (jpg) fichier (pdf) votre cv

=> est ce que je peux télécharger un fichier qui contient du code ??? 

fichier.php (backdoor) 


1 tester le formulaire sans rien mettre
    - => Your image was not uploaded.

2 regarder le html

```html
<form enctype="multipart/form-data" action="#" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="100000">
    Choose an image to upload:<br><br>
    <input name="uploaded" type="file"><br>
    <br>
    <input type="submit" name="Upload" value="Upload">

</form>
<pre>Your image was not uploaded.</pre>
```

lorsque l'on télécharge un fichier il faut vérifier => image ET le poids

3 tester de télécharger une image

Attention il faut que le fichier téléchargé dispose d'un poids maximum de 100 ko

message : 
../../hackable/uploads/86e38f9a7061d24fef01063ed0f67385.jpg

lors du téléchargement par le site internet le fichier quand il est mis dans le serveur n'est pas renommé 

http://127.0.0.1:4280/vulnerabilities/upload/../../hackable/uploads/86e38f9a7061d24fef01063ed0f67385.jpg


```sh
mv /tmp/idgeo.jpg /var/www/html/public/idgeo.jpg
```

- tester de télécharger un fichier php


```php
<?php
// 01-fichier.php
echo "bonjour" ;
```

ET j'ai réussi à la télécharger !!! 

http://127.0.0.1:4280/vulnerabilities/upload/../../hackable/uploads/01-fichier.php

- 
- créer un fichier php contient un code "backdoor"
- exploiter la backdoor 