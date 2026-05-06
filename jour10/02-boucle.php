<?php 


# deuxieme structure ESSENTIELLE => boucle 

// for(){ }

// dans la parenthèse de for il y a 3 instructions 

for($i = 0 ; $i < 2 ; $i++){

}
for($i = 0 ; $i < 2 ; $i = $i + 1){

}
// 1ère instruction  $i=0 ; 
    // minimum le point de départ de la boucle
    // $i iterateur
// 2ème instruction  $i < 2 ;
    // maximum de la boucle 
    // comparaison entre une variable que l'on vient de créer et un chiffre qui est le maximum
    // la condition de sortie de le boucle 
    // tant que cette comparaison est true on effectue les traitements dans les accolades de le boucle for
// 3ème instruction  $i++ 
    // $i++ <=> $i = $i + 1 
    // augmente de + 1 la valeur stockée dans $i 


// Créer un nouveau 03-exo.php

/* en utilisant une boucle for afficher dans le navigateur les chaines de caractères suivantes :
    
1 x 0 = 0
1 x 1 = 1
1 x 2 = 2
1 x 3 = 3
...
1 x 10 = 10 */
