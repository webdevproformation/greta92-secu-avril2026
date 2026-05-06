<?php 


function calculMoyenne( $tableau )
{
    $total = 0 ;
    for($i = 0 ; $i < count($tableau) ; $i++){
        $total += $tableau[$i];
    }
    echo $total / count($tableau);
}


 calculMoyenne( [ 1 ,2 ,3 , 4  ] );
 calculMoyenne( [ 12 , 30 ,25.3  ] );