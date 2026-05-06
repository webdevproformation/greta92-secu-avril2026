<?php 

# chiffre
$a = 1 ;
$b = 2 ;

echo $a + $b ; 

# texte
$cp = 75000 ;

$adresse = "75 rue de Paris $cp à Paris";  // concaténation

# boolean 
$verif = 10 > 2 && 5 < 30 ;
//        true  &&  true
//           true 

// les tableaux acceptent eux aussi des traitements spéciaux
// parcourir un tableau / faire un traitement pour chaque valeur d'un tableau


$etudiants = ["Alain", "Céline" , "Denis" , "Charlotte"] ;
//              0         1          2           3

$etudiants[0]; // min 0
$etudiants[1];
$etudiants[2];
$etudiants[3]; // max 3
// augmentation + 1


// parcourir chaque valeur du tableau 
for($i = 0 ; $i <= 3 ; $i++)
{
    echo $etudiants[$i] . "<br>"; 
}

// dans mon navigateur http://localhost:1234/06-tableau-suite.php