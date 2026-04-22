# Rappels

- installation de DVWA 
- Linux 
    - BDD
    - récupérer les sources
    - modification de php.ini
- Windows
    - XAMPP => Cross Windows / Linux / Mac
- LAMP => Linux Apache MySQL PHP

- Burp Suite => outil de type proxy (intercepter les discussions entre le navigateur et serveur)

# Attaque par force Brut low 

- formulaire login + password 
-  mal sécurisé 
    - GET => toutes informations saisies sont visibles dans l'url après soumission
    - et tu peux faire autant de test que tu veux  

- utiliser la burp suite => récupérer la requete 
    - module Repeater => 
    - module Intruder => exécuter la requête avec un DICTIONNAIRE

- <https://github.com/danielmiessler/SecLists/tree/master/Usernames>
- <https://github.com/rapid7/metasploit-framework/tree/master/data/wordlists>
- <https://github.com/webdevproformation/PayloadsAllTheThings/blob/master/SQL%20Injection/Intruder/Auth_Bypass.txt>
- 
    - les valeurs du dictionnaire => PAYLOAD (charge utile)
    - 

## Code 

```php
if( isset( $_GET[ 'Login' ] ) ) { // vérifique uniquement si la valeur Login envoyée
    // Get username
    $user = $_GET[ 'username' ]; // récupére la valeur saisie dans le champ username

    // Get password
    $pass = $_GET[ 'password' ]; // récupére la valeur saisie dans le champ password
    $pass = md5( $pass );        // hashé le mot de passe

    // RIEN

    // Check the database
    $query  = "SELECT * FROM `users` WHERE user = '$user' AND password = '$pass';";
```

