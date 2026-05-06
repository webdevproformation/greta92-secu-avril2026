<?php 

// dans mon navigateur http://localhost:1234/05-exo.php

$fleurs = ["rose" , "lilas" , "muguet", "jasmin", "tulipe"] ;
//           0         1          2         3        4

/**
3 afficher dans le navigateur le premier élément de la variable fleurs
4 afficher dans le navigateur le dernier élément de la variable fleurs
5 afficher dans le navigateur le troisième élément de la variable fleurs
 */

echo $fleurs[0] . "<br>";
echo $fleurs[4] . "<br>"; // solution1
// 
echo $fleurs[ count($fleurs) - 1 ] . "<br>"; // solution2
//                5         -1
//                4

echo $fleurs[2] ;