<?php 

// 02-variable.php
// http://localhost:1234/02-variable.php
// attention pour que vos scripts PHP fonctionnent IL NE FAUT PAS ETEINDRE LE SERVEUR

// pour créer des variables en PHP on utilise la syntaxe suivante

$etudiant = "Alain" ; 

// $etudiant la variable
// espace facultatif
// = opérateur d'affectation
// espace facultatif
// "Alain" valeur (du texte) que l'on veut stocker dans la variable
// espace facultatif
// ; met fin à l'instruction 

// une variable peut contenir
// du texte => string 

$ville = "Paris" ;

// chiffre => int / float

$distance = 20 ; // int
$prix  = 10.5  ; // float
$salaire = 60000 ; 
$salaire = 60_000 ; 
// $salaire = 60 000 ;  // erreur 
// $salaire = 60000euros ;  // erreur 
$salaire = "60000euros" ;  // ok 

// boolean
$test = true ; // true SANS guillemet est un MOT CLE de PHP
$test = "true" ;  // "true" AVEC guillement => texte 
$test2 = false ; // false est un mot clé du langage PHP 

// string / int / float /boolean => type de base / scalaire

// DANS une variable on va stocker UNE SEULE VALEUR

$auteur = "Victor Hugo" ; 

// type complexe = dans une variable on stocker PLUSIEURS VALEURS 


// tableau array 

// tableau indexé

$jours = ["lundi" , "mardi" , "mercredi" ] ;

// dans la variable $jours on stocke 3 textes / 3 string 

// objet 
// pour créer une objet en PHP il faut au préalable créer une class 

class Formation{
    public $nom = "Analyste Securite Web" ;
    public $prix = 3_000 ;
    public $duree = 4 ;
}

$formation = new Formation(); 
// c'est la variable $formation qui est l'objet 
// pour créer l'objet il faut AU PREALABLE créer la class Formation 

// class new public ce sont des mots clé du langage PHP comme true false ; = 