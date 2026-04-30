# Authorization Bypass

modifier le fichier php.ini et restart apache

- linux 
- terminal 

```
sudo su -
cd /etc/php/8.3/apache2
vi php.ini
```

si vous avez vi 

```
/display_errors 
n
n
display_errors=Off

display_errors=On

ESC :wq!
```

si vous avez nano



systemctl restart apache2 



http://127.0.0.1:4280/vulnerabilities/authbypass/
http://127.0.0.1:4280/vulnerabilities/authbypass/get_user_data.php

gordonb / abc123


Front => REACT
Back  => Python Fast API
BDD   => MongoDB // MySQL  


# High

http://127.0.0.1:4280/vulnerabilities/authbypass/

Non Authorisé

http://127.0.0.1:4280/vulnerabilities/authbypass/get_user_data.php

{"result":"fail","error":"Access denied"}

MAIS je peux faire une mis à jour d'un profil ET aucune modification

1 Burp Suite
2 se connecte en tant qu'admin
3 high
4 va sur la page de authBypass
5 mise à jour d'un profil user et on clique sur le bouton update
6 on récupére la requête dans l'historique 
7 mettre cette requête dans le REpeater ET je vais modifier 

    Cookie: PHPSESSID=a6dd5339b9b1db414d9c768deb1e9aa8; security=high (cookie de l'admin)
    Cookie: PHPSESSID=01638a5226b297c5c3be7250d0722853; security=high (cookie de de gordonb)

8 send  => OK ça passe

