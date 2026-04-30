# low 

vous êtes administrateur d'un site internet 
vous vous connectez à votre espace de gestion et vous avez une page
dans laquelle il y a la liste de toutes utilisateurs qui se sont inscrits dans le site internet 

ET NORMALEMENT 

- admin accède à cette page 
- un utilisateur non administrateur 
    - il passe derrière l'admin et il repère que l'adresse de la page des utilisateur est 
        - http://127.0.0.1:4280/vulnerabilities/authbypass/
        - gordonb / abc123


dans un site internet vous avez des utilisateurs qui des ROLES 

- fonction du rôle que vous avez vous avez DROITS / INTERDITS 
 
ACL :  Access Control List

par exemple le système 

rwx de linux pour chaque fichier 

<https://immobilier.lefigaro.fr/article/forte-amende-pour-un-syndic-qui-ne-securisait-pas-les-donnees-de-ses-clients_71d2c500-884b-11e9-bc1d-9b7a6df1c27b>


# Medium

<http://127.0.0.1:4280/vulnerabilities/authbypass/>
gordonb / abc123


```txt
Unauthorised
Warning: http_response_code(): Cannot set response code - headers already sent (output started at /var/www/html/vulnerabilities/authbypass/source/medium.php:14) in /var/www/html/vulnerabilities/authbypass/source/medium.php on line 15
```

404 
401 => Unauthorised
403 => Forbidden => l'utilisateur s'est connecté MAIS il n'a pas n'a pas les droits suffisants pour accéder à la ressource 

page d'erreur MAIS en + message d'erreur informatique 



http_response_code() => PHP  <https://www.php.net/manual/en/function.http-response-code.php>
/var/www/html/vulnerabilities/authbypass/source/medium.php
                     => information sur le fichier qui exécuter le code 

cookie de session => dans de fichier que le site internet va pouvoir déterminer
- que l'on connecter ET
- quelle est notre role 


```php
if (dvwaCurrentUser() != "admin") {
    print "Unauthorised";
    http_response_code(403);
    exit;
}
```