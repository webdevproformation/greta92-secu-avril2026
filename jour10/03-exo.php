<?php 

    
/* 
1 x 0 = 0  => min de boucle 0 => $i = 0
1 x 1 = 1
1 x 2 = 2
1 x 3 = 3
...
1 x 10 = 10  => max de la boucle $i < 11  $i <= 10

augmentation + 1 $i++
*/

for($i = 0 ; $i <= 10 ; $i++)
{
    // 1 x 0 = 0
    // 1 x 1 = 1
    //     $i = $total ($i * 1) 
    // 1 x 10 = 10

    $total = $i * 1 ;                   // multiplication
    $resultat = "1 x $i = $total <br>"; // concaténation
    echo $resultat ; 
}

// cd jour10
// php -S localhost:1234 
// dans mon navigateur http://localhost:1234/03-exo.php