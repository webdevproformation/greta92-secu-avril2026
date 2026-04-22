# Médium

- je vais soumettre vide 
    - GET
    - la page identique à low
    - par contre si je soumets une mauvaise combinaison 
    - petit temps d'attente avant de pouvoir réaliser une nouvelle soumission


```php
if( isset( $_GET[ 'Login' ] ) ) {
    // Sanitise username input => enlever les caractères qui peuvent générer des injections
    $user = $_GET[ 'username' ];
    $user =  mysqli_real_escape_string($GLOBALS["___mysqli_ston"],  $user );

    // Sanitise username input => enlever les caractères qui peuvent générer des injections
    $pass = $_GET[ 'password' ];
    $pass =  mysqli_real_escape_string($GLOBALS["___mysqli_ston"],  $pass ) ;
    $pass = md5( $pass );

    // Check the database
    $query  = "SELECT * FROM `users` WHERE user = '$user' AND password = '$pass';";



    // ralentir l'attaque 
    sleep( 2 );

```


# High 



<http://127.0.0.1:4280/vulnerabilities/brute/?username=&password=&Login=Login&user_token=f77dd5db7a7f81fdab1e635db38a1349#>

Token CSRF => champ invisible qui a été ajouté par le développeur (créer le formulaire)
qui contient une chaine de caractère aléatoire 
si je fais une mise à jour à chaque chargement de page 

cbe20f564c758622ae69d175843eef83
fe586cf8df7d596b67484339127a8a83
e2bd54dc2231ab5e08574eedb6e32ccd

côté serveur 
    - vérifier login et le password avec au préalable Sanitize 
    - ET vérifie que le token / jeton est valide 
    - verifier que le formulaire est SOUMIS par un HUMAIN 
    - TOUT FORMULAIRE PROFESSIONNEL DOIT CONTENIR un champ MASQUE `<input type='hidden'>` avec un jeton de verification qui doit être vérifié côté serveur 


```php
if( isset( $_GET[ 'Login' ] ) ) {
    // Check Anti-CSRF token
    checkToken( $_REQUEST[ 'user_token' ], $_SESSION[ 'session_token' ], 'index.php' );
    // Vérification



     sleep( rand( 0, 3 ) ); // même le temps d'attente est alétoire entre 0 et 3 secondes
```

# Impossible 

- Tocken
- Sanitize des valeurs transmises
- sleep( rand( 0, 3 ) )
- Table en + plus stocker le nombre de tentative de connexion
    - si on dépasse le seuil qui est 3 tentatives => bloquer pendant un certain temps 15 min pour retester
    - voir même bloquer (désactiver) le compte sur lequel il y a trop de tentatives 