# exos sources

- <https://ctfs.cyrhades.fr/> (logiciel à installer catalogue d'image docker téléchargeable spécialisé dans le sécurité)
- <https://portswigger.net/web-security/all-labs> (site internet)
- <https://academy.hackthebox.com/>
- <https://tryhackme.com/challenges>

# Rappel 

## injection SQL

saisir du SQL dans un champ de formulaire

formulaire de connexion
formulaire de recherche = PS3
formulaire de recherche = PS3'
formulaire de recherche = PS3' --
formulaire de recherche = PS3' OR 1 --
formulaire de recherche = PS3' UNION SELECT ...  --



```sql
SELECT ... FROM table WHERE nom_produit = ???
SELECT ... FROM table WHERE nom_produit = 'PS3'
SELECT ... FROM table WHERE nom_produit = 'PS3''
SELECT ... FROM table WHERE nom_produit = 'PS3' --'
SELECT ... FROM table WHERE nom_produit = 'PS3' OR 1 --'
SELECT ... FROM table WHERE nom_produit = 'PS3' UNION SELECT ... --'
SELECT ... FROM table WHERE nom_produit LIKE ???
```

Pour ne pas avoir ces erreurs / failles 

il ne faut pas utiliser directement les variables dans les requêtes SQL 

```php
// exemple de code avec injection 
// récupére la valeur saisie du formulaire
$produit = $_GET["produit"] ;

// ET elle est utilisée DIRECTEMENT dans la requête SQL 
SELECT ... FROM table WHERE nom_produit = '$produit' ; 
```

Pour éviter 

```php
// exemple de code sans injection 

$produit = $_GET["produit"] ;

if(){} => vérifications la nature des données reçues

// échapper  => ajouter le symbole \ devant les apostrophes
//  fonctions spéciales qui échappent
//  requête préparée $connexion->prepare()

$stmt = $connexion->prepare("SELECT ... FROM table WHERE nom_produit = ':produit'") ;
$connexion->execute([ "produit" => $produit ]) 
// la fonction execute() va échapper les apostrophes
```



## injection XSS

saisir du Javascript dans un champ de formulaire 

écrire un texte dans le champ du formulaire => le texte va être afficher à l'écran (qui va le mettre dans le html)

<h1>titre</h1>
<script> .... </script>
<img src="" onerror="">
<iframe> <embed> <object>

- XSS DOM : ajouter du html injecté
- XSS Stored 
    - écrire un texte dans le champ du formulaire
    - STOCKER / Persisté dans une base de données
    - affiché dans le DOM
- XSS Reflected
    - écrire un texte dans le champ du formulaire
    - affiché dans le DOM
    - lorsque vous fermez la page le XSS disparait 
- Self XSS 