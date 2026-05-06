<?php 
// dans mon navigateur http://localhost:1234/08-fonction.php

// variable stocker des valeurs un ou plusieurs

$a = 1 ;

$b = "bonjour" ;

$c = [1,2,3];

// fonction permet de stocker une ou plusieurs INSTRUCTIONS 

function d (){ // créer une fonction ET les instructions sont STOCKEES
    if(true){
        echo "bonjour" ;
    }
    $total = 10 ;
    $tva = 0.2 ;
    echo $total * (1 + $tva) ; 
}
// créer une fonction qui s'appelle d
// la variable d stocke / contient les 3 instructions entre les { }


// 2ème et dernière étape

// si je veux EXECUTER lES INSTRUCTIONS qui sont stockées dans la fonction d 

// appeler la fonction 

d() ; // VRAIMENT exécuter toutes les instructions stockées dans la fonction d 

/** 
Créer un nouveau fichier 09-exo.php

1/ déclarer une fonction aireCercle 

2/ cette fonction contient deux instructions :
- déclarer la variable $resultat = 3,14 * 20 puissance 2
- afficher dans le navigateur la phrase suivante :
l'aire d'un cercle de rayon 20 a une aire de $resultat

3/ exécuter la fonction aireCercle 

 */