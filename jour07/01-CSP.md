# CSP

- CSP : Content Security Policy 

- ajout dans la norme de communication HTTP 
- ce sont des entêtes HTTP qui vont être généré côté serveur 
- donner des indications au client sur ce qu'il doit faire lorsqu'il doit exécuter du html 

=> Excellente manière pour se protéger des attaques XSS 


# présentation

```php
header("Content-Security-Policy: default-src 'none';");
```

Dire au navigateur ce qu'il doit / peut exécuter

en html qui vont appeler des adresses internet qui sont HORS de la page

```html
<img src=""> # appeler une image
<link > # appeler du css
<script> # appeler du javascript
<iframe> <embed> <object> # appeler vidéo / carte ...
<form action="" > # où vous envoyer les informations lorsque vous soumettez le formulaire
<video> <audio>
<svg> # appeler une image vectorielle
```
dire au navigateur 
    - est ce que tu peux l'exécuter / 
    - si on peut l'exécuter l'adresse où le navigateur peut rechercher le code à importer

pour javascript spécialement :

```html
<script></script>
<script src=""></script>
<img src="" onerror="">
```


# exemple concrête de CSP 


```php
<?php
header("
        Content-Security-Policy: default-src 'none'; 
                                 script-src 'self' code.jquery.com; 
                                 connect-src 'self'; 
                                 img-src 'self'; 
                                 style-src 'self';
                                 base-uri 'self';
                                 form-action 'self'; 
                                 report-uri http://localhost:1234/report2.php ;");

// par défaut navigateur tu dois RIEN accepter  default-src 'none'; 
// EXCEPTION => toutes les autres lignes 
//   script-src 'self' code.jquery.com; 
//   <script src="http://code.jquery.com ......">
//   <script src="http://localhost:1235 ......">
?>
```

```html
<h1 class="bonjour" id="salut" style="color:red" onerror="alert('toto')"></h1>

<img src="xxx" onerror="window.addEventListener('keypress', function(e){ console.log(e.key)})">
<img src="xxx" onerror='let msg = "vraiment ??";while(true){alert(msg);msg += " tu es sûr ??";}'>
```
