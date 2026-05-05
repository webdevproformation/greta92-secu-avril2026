<?php 

// 08-operation-boolean.php
// http://localhost:1234/08-operation-boolean.php

$a = true ;
$b = false ; 

$c = 10 > 5 ; 
//     true 

$ville = "Paris" ;
$destination = "Toulouse" ;

$d = $ville == $destination ; 
//          false 

$e = 40 < 8 ; 
//     false 

// > strictement supérieur
// >= > = supérieur ou égal
// < inférieur strictement
// <=  < = inférieur ou égal
// ==  = = égal 
// !=  ! = différent
// === = = =  égalité stricte 

$f = 2 == 2 ; // true
$g = 2 == "2" ; // true 
$h = 2 === "2" ; // false comparaison valeur ET type

$i = "a" == "ab" ; // false 


// opérateur boolean

$j = 10 > 3 && 5 < 3 ; 
//    true  &&  false
//         false 

// connecte dans un site internet

// opérateur ET &&


$nom = "azerty";
$passwrd = 123456 ;

$connexion = "azerty" == $nom &&     123457 == $passwrd ; 
//         = "azerty" == "azerty" && 123457 == 123456 ; 
//         = true                 && false ; 
//         =                false  ; 

$connexion = "azerty" == $nom &&     123456 == $passwrd ;
//         = "azerty" == "azerty" && 123456 == 123456 ; 
//         = true                 && true ; 
//         =                      true ; 

// opérateur || 

$ville = "Marseille" ;

$enFrance = $ville == "Paris" || $ville == "Toulouse" || $ville == "Marseille" ; 
//  = "Marseille" == "Paris" || "Marseille" == "Toulouse" || "Marseille" == "Marseille" ; 
//  =  false                  || false                     || true ; 
//                     false                               || true 
//                                      true 


/**
 * créer le fichier 09-exo.php 
 * 
 * pour que comparaison ci dessous dire si le résultat final est true / false 
 * expliquer pourquoi ??
 * expression
 2 >= 2
 "a" == "ab"
 2 =! 3 && 10 < 33
 "hello" > "bonjour" 
 2 ==  "2"
 2 === "2"
 (2 != 5 && 3 > 4 ) || 2 <= 14 
 2 != 5 && ( 3 > 4  || 2 <= 14 ) 
 2 != 5 && 3 > 4  || 2 <= 14  
 * 
 */