# Rappel

## CSP

Content Security Policy 

entête HTTP qui vont donner des DIRECTIVES au navigateur sur OU chercher et exécuter javascript 

en html, pour exécuter du javascript il existe 3 syntaxes :

```html
<script> .... </script>
<img src="" onerror="....."> / <body onload=" ..." > / <h1 onclick="..." >
<script src="fichier.js"></script>
```

Content-Security-Policy : 
            script-src 'self' // Navigateur tu ne peux exécuter QUE des fichier js qui sont stockés dans ta machine .

seule la méthode 3 sera exécutée par le navigateur 

cette technique ajoute un blocage en + pour les attaques XSS (javascript)

Souvent les sites internet sont des assemblages de librairies ET les CSP vont pouvez garantir que ces librairies ne vont pas être des chevaux de Troie

## Javascript Attack

vous avez un formulaire : 
- saisir une valeur 'success' ET 
- dans le même formulaire vous avez aussi un champ masqué contient token


le serveur va comparer 'success' === token

ET pour le calcul du token on utilise du javascript 
Javascript langage CLIENT DONC on peut voir en clair le ou les fonctions qui permettent de générer le token 

il est possible de masquer les fonctions javascript via OBFUSCATION => masquer


```js
console.log("a")
```

```js
function q()
{
    return a
}
let a = 1
let b = 24 ;
let c = "abcdefghij"
function t()
{
    return q;
}
console.log(t())
```

```js
function q(){return a};let a = 1;let b = 24 ;let c = "abcdefghij";function t(){return q;};console.log(t());
```

=> reverse engineering 