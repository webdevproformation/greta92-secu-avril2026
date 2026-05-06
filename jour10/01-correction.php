<?php

// créer le fichier 01-correction.php
// créer une variable qui s'appelle $ville  = "Marseille"

// si $ville a pour valeur Paris 
// alors afficher dans le navigateur "vous habitez à Paris"

// si $ville a pour valeur soit Boulogne ou Clamart ou Montrouge 
// alors afficher dans le navigateur "vous habitez dans le 92"

// si $ville a pour valeur "Saint-Denis" ou "Aubervilliers" ou "Pantin"
//  alors afficher dans le navigateur "vous habitez dans le 93"

// sinon
// afficher dans le navigateur "vous habitez hors d'Ile de France"

$ville = "Marseille";
if($ville == "Paris"){
    echo "vous habitez à Paris" ;
}
else if(
    $ville == "Boulogne" ||
    $ville == "Clamart" ||
    $ville == "Montrouge" 
){
    echo "vous habitez dans le 92";
}
else if( $ville == "Saint-Denis" || $ville == "Aubervilliers" || $ville == "Pantin" )
{
     echo "vous habitez dans le 93";
}
else{
    echo "vous habitez hors d'Ile de France";
}