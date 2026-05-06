<?php 


$prix = 400 ; 

function calculPrix()
{
    $prix = 200 ;
    $remise = 0.2 ;
    $prixProduit = $prix * (1 - $remise); 
}

// les variables $prix / $remise et $prixProduit
// SONT LOCALES à la fonction 
// elles n'existent pas à l'extérieur de la fonction 
// la fonction va PROTEGES ses variables 


function calculSurfaceRectangle()
{
    $largeur = 10 ;
    $longeur = 30 ;
    $surface = $largeur * $longeur ; 
}


function calculSurfaceRectangle2()
{
    $largeur = 12 ;
    $longeur = 25 ;
    $surface = $largeur * $longeur ; 
}

$largeur = 200 ; 
                                                        // arguments
function calculSurfaceRectangle3( $largeur , $longeur ) // paramètres
{
    #$largeur = 12 ;
    #$longeur = 25 ;
    $surface = $largeur * $longeur ; 
    return $surface ; // permet de récupérer des valeurs qui ont été calculées dans une fonction 
}

calculSurfaceRectangle3( 12 , 25 ); // au moment de l'exécution de la fonction que je vais donner la valeur à mes paramètres 


// créer le fichier 11-exo.php 

// ce fichier contient une fonction qui va s'appelle calculMoyenne

// cette fonction contient un argument qui s'appelle tableau

// cette fonction contient 3 instructions 

// créer une variable $total = 0
// parcourir le tableau (paramètre de la fonction) pour faire la somme de tous les valeurs dans le tableau
// echo de total / nb l'élément dans le tableau

// exécuter la fonction moyenne avec le tableau [ 1 ,2 ,3 , 4  ]
// exécuter la fonction moyenne avec le tableau [ 12 , 30 ,25.3  ]