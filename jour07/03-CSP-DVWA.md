# low 

CSP Bypass => contourner les règles mises en place

Content-Security-Policy
	        script-src 
                'self' 
                https://pastebin.com 
                hastebin.com 
                www.toptal.com 
                example.com 
                code.jquery.com 
                https://ssl.google-analytics.com 
                unpkg.com 
                cdn.jsdelivr.net 
                digi.ninja 


si j'utilise le formulaire et que je saisis : http://google.fr

dans la console :

Content-Security-Policy : Les paramètres de la page ont empêché l’exécution d’un gestionnaire d’évènement (script-src-attr) car il enfreint la directive suivante : « script-src 'self' https://pastebin.com http://hastebin.com http://www.toptal.com http://example.com http://code.jquery.com https://ssl.google-analytics.com http://unpkg.com http://cdn.jsdelivr.net http://digi.ninja ». Envisagez l’utilisation d’une empreinte (« sha256-lvY3uaQbQS6g0Y4kOGleC2Hcmtjfy31SlAyUDOYuqII= ») avec l’attribut « unsafe-hashes ».
Source: javascript:toggleTheme();

si je veux contourner les sécurités

- réussir à télécharger un fichier .js DANS le site => via le FileUpload
- allez regarder dans la liste de sites (trusted locations) et voir si on ne peut ajouter 'facilement' du javascript chez eux 


# Medium 

le CSP en medium est différent ce celui de low 

```
Content-Security-Policy
	script-src 'self' 'unsafe-inline' 'nonce-TmV2ZXIgZ29pbmcgdG8gZ2l2ZSB5b3UgdXA=';
```

'self' => uniquement les scripts qui sont stockés sur le serveur 
'unsafe-inline' => accepte les attributs onerror=""
'nonce-TmV2ZXIgZ29pbmcgdG8gZ2l2ZSB5b3UgdXA=' 

Content-Security-Policy
	script-src 'self' 'unsafe-inline' 'nonce-TmV2ZXIgZ29pbmcgdG8gZ2l2ZSB5b3UgdXA=';

<script src="https://google.fr/script.js" nonce='TmV2ZXIgZ29pbmcgdG8gZ2l2ZSB5b3UgdXA='></script>

<script nonce="TmV2ZXIgZ29pbmcgdG8gZ2l2ZSB5b3UgdXA=">alert('coucou')</script>

<script nonce='TmV2ZXIgZ29pbmcgdG8gZ2l2ZSB5b3UgdXA='>alert('virus')</script>


# High 


attention dans ce niveau, l'exo utilise ajax lorsque vous cliquez sur le bouton 

si je vais dans l'inspecteur > réseau > 

<http://127.0.0.1:4280/vulnerabilities/csp/source/jsonp.php?callback=solveSum>

pour rappel dans l'énoncé, il y a l'indice suivant : `../..//vulnerabilities/csp/source/jsonp.php`

http://127.0.0.1:4280/vulnerabilities/csp/source/jsonp.php?callback=alert(1)

appuyer sur le bouton 

appeler ajax qui va appeler l'adresse internet suivante : 

http://127.0.0.1:4280/vulnerabilities/csp/source/jsonp.php?callback=solveSum

donc il y a un script PHP qui va récupérer la valeur qui est après le symbole = solveSum

et il va l'utiliser dans PHP 


- Lancer Burp Suite 
- aller sur le proxy lancer le navigateur intégré 
- aller sur la page high puis sur la page CSP ByPass
- Retour sur Burp Suite > Proxy > Intercept > Activer le mode interception 
- cliquer sur le bouton solve the SUM
- modifier la requête
    - GET /vulnerabilities/csp/source/jsonp.php?callback=solveSum HTTP/1.1
    - GET /vulnerabilities/csp/source/jsonp.php?callback=alert(1) HTTP/1.1
- Retour sur Burp Suite > Proxy > Intercept > Forward 