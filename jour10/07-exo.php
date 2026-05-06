<?php 

$listeMarque = ["Toyota", "BMW", "Skoda", "Nissan"] ;
//                 0                         3            
/**
voiture n° 1 a la marque Toyota
voiture n° 2 a la marque BMW
voiture n° 3 a la marque Skoda
voiture n° 4 a la marque Nissan
 */

// solution 1
for($i = 0 ; $i <= 3 ; $i++)
{
    $marque = $listeMarque[$i];
    $num    = $i + 1 ;
    echo "voiture n° $num a la marque $marque <br>";
}

// dans mon navigateur http://localhost:1234/07-exo.php
// solution 2
for($i = 0 ; $i <= 3 ; $i++)
{
    echo "voiture n° ". ($i + 1)  ." a la marque {$listeMarque[$i]} <br>";
}