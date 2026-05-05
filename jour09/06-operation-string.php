<?php 

// 06-operation-string.php
// http://localhost:1234/06-operation-string.php

// concatenation = addition de plusieurs string 

$prix = 30 ;
$unite = "h" ;
$formation = "Ressouces Humaines" ;

// j'ai suivi une formation en Ressouces Humaines qui a durée 30h ; 
// je veux écrire la phrase précédente en utilisant les variables précédentes

$reponse = "j'ai suivi une formation en $formation qui a durée $prix$unite" ;

echo $reponse ;

/**
1 créer un nouveau 07-exo.php

2 ce fichier contient quatre variables

$titre = "M"
$prenom = "Alain"
$age = 12
$unite = ans

écrire dans le navigateur la phrase suivante : (en utilisant les variables précédentes)

Je m'appelle Monsieur Alain et j'ai 12 ans


 */