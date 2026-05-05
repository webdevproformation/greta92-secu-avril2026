<?php 

// 10-if.php
// http://localhost:1234/10-if.php

// STRUCTURE / Block
// 3 structures
    // if condition
    // for boucle
    // function sous programme

// condition 

// if(){}

if( 20 > 4  )
    // true
{
    echo "exécuter toutes les instructions dans les accolades" ;
}

if( 20 < 4 ){
    // si la condition est false ALORS tout le code qui est entre les accolades est ignoré
    // false
    echo "coucou"; 

}

if ("a" == "b")
{
    
}

$isLogged = true ;

if($isLogged)
{

}

$age = 18 ;

if($age < 18){
    echo "vous êtes mineur";
}
else if($age < 60){
    echo "vous êtes adulte";
}
else if($age < 120){
    echo "vous êtes retraité";
}
else{
    echo "age invalide"; 
}

// créer le fichier 11-exo.php
// créer une variable qui s'appelle $ville  = "Marseille"

// si $ville a pour valeur Paris 
// alors afficher dans le navigateur "vous habitez à Paris"

// si $ville a pour valeur soit Boulogne ou Clamart ou Montrouge 
// alors afficher dans le navigateur "vous habitez dans le 92"

// si $ville a pour valeur "Saint-Denis" ou "Aubervilliers" ou "Pantin"
//  alors afficher dans le navigateur "vous habitez dans le 93"

// sinon
// afficher dans le navigateur "vous habitez hors d'Ile de France"
