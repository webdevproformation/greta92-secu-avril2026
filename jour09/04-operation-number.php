<?php 

// 04-operation-number.php
// http://localhost:1234/04-operation-number.php

$a = 10 ;
$b = 30 ; 

// calcul via ces variables 

$c = $a + $b ; //  
//   10 + 30 
//    40 
// stocker cette valeur dans la variable $c 
// c:int

$d = $a - $b ;  // -20

$e = $a * $b ; // multiplication

$f = $a / $b ; //division

$g = $a % $b ; // modulo => 10 % 30 => 10 reste entier

$i = $a ** $b ; // 10 puissance 30 


$total = 0 ; // créer la variable $total dans laquelle je stocke la valeur 0

$total = $total + 10 ; 

// attention le symbole = de l'informatique n'a pas le même sens que le = des mathématiques
// = des mathématiques VA COMPARER
// = de l'informatique VA AFFECTER / stocker un calcul dans une variable 

$total = $total + 10 ; 

$total += 10 ;  // équivalent de l'instruction précédente
                // += opérateur unaire


$prix = 30 ;
$prix = $prix + 1 ;
$prix += 1 ;
$prix++ ; 
$prix++ ; 

$prix = $prix - 1 ;
$prix -= 1 ;
$prix-- ;  


$prix *= 1 ;
$prix /= 1 ;
$prix %= 1 ;