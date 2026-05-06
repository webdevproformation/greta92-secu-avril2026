<?php 

// etudiants
// prénom /nom 
// Alain DOE
// Céline DUPONT

$etudiant1Prenom = "Alain";
$etudiant1Nom    = "DOE" ;
$etudiant1Age    = 22 ;

$etudiant2Prenom = "Céline" ;
$etudiant2Nom    = "DUPONT" ;
$etudiant2Age    = 34  ; 

// SANS tableau voilà comment il faut gérer les valeurs dans le programme
// il faudrait créer AUTANT DE variable que de VALEUR 

// comment faire pour RASSEMBLER les valeurs dans MOINS de variable

// => TABLEAU 
// cd jour10
// php -S localhost:1234 

$etudiant1 = [ "Alain" , "DOE" , 22 ] ; 
// cas pratique créer le variable $etudiant2 qui contient les valeurs Céline DUPONT et 34
$etudiant2 = ["Céline" , "DUPONT" , 34 ] ; 

// il est possible de regrouper des tableaux dans un tableau unique 

// tableau qui contient des tableaux (tableau multidimensionnel)
$etudiants = [
    [ "Alain" , "DOE"    , 22 ],
    ["Céline" , "DUPONT" , 34 ]
]; 

// tableau permet de rassembler des valeurs dans une seule variable


// chaque élément / valeur qui est stocké dans un tableau a une position aussi appelé index


$prix = [ 1.2 , 1.5 , 1.4 ];
//         0     1     2

// dans le tableau $prix , le chiffre 1.2 a la position 0 


// si je veux récupérer la valeur 1.4 dans le tableau $prix

$prix[2] ; // va récupérer la valeur qui est positionnée dans le tableau à la position 2

// si je veux récupérer le chiffre 1.5
$prix[1] ; 

/**
1 créer un nouveau 05-exo.php

2 ce fichier contient une variable de type tableau :
- le nom de la variable est $fleurs
- cette variable contient les valeurs suivantes :
  - rose
  - lilas
  - muguet
  - jasmin
  - tulipe

3 afficher dans le navigateur le premier élément de la variable fleurs
4 afficher dans le navigateur le dernier élément de la variable fleurs
5 afficher dans le navigateur le troisième élément de la variable fleurs

<http://helloworldcollection.de/#COBOL>
fleur.length
len(fleur)
count($fleur)
 */