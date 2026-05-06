# Rappel 

- fin de formation / eval final => site internet sécurisé (bien codé)
- faire un site blog (journal personnel)

- PHP / HTML / JS / MySQL / CSS (bootstrap)
- introduction à PHP
- MVC 

- PHP langage serveur 
- il faut pour le fonctionner un serveur => XAMPP ou VirtualBox
- créer un fichier `.php`

```php
<?php // ouvre une balise php 
      // dans cette balise nous allons écrire UNIQUEMENT du PHP

echo "...." ; // echo mot clé de PHP afficher le texte / variable après à l'écran

// créer une variable 

$premier = "";

// il est possible de stocker dans une variable 5 types de valeurs

//string 
$txtAuteur = "Victor";

// chiffre
$nbPrix = 1.2 ;
$nbDuree = 30 ;

// logique boolean
$isAdmin = true ;
$isMajeur = 18 > 5 ;
$isLogged = false ;

// tableau array
$tbFleurs = [ "jasmin" , "tulipe" , "lilas" ];

// objet 
class Exo{
    public string $txtTitre = "faire une boucle";
    public int $nbDuree = 10 ;
}
$objExo = new Exo();


// opérations sur les chiffres

$a = 1 ;
$b = 2 ;

$c = $a + $b ; # addition
$d = $a - $b ; # soustraction
$e = $a * $b ; # multiplication
$f = $a / $b ;  # division 
$g = $a ** $b ; # puissance
$h = $a % $b ;  # modulo


// opérateur unaire  +=
$total = 10 ;
$total = $total + 15 ;
$total += 15 ;  // l'opérateur += remplace  $total = $total +

// opérateur unaire  ++

$compteur = 10 ;
$compteur = $compteur + 1 ;
$compteur += 1 ;
$compteur ++ ;

// opérateur unaire  --

$nbTemperature = 10 ;

$nbTemperature = $nbTemperature - 1 ;
$nbTemperature -= 1 ;
$nbTemperature -- ;


# opérations sur les boolean

## opérateurs de comparaison

> supérieur strict
< inféreur strict
>= supérieur ou égal
<= inférieur ou égal
== égal
!= différent
=== égal strict

## opérateur boolean

&& ET 
|| OU 

# 3 structures DANS TOUS LES LANGAGES (PHP les utilisen)
# if(){ }       // condition
# for(){ }      // boucle
# function(){ } // sous programme

$condition = 10 > 3 ;

if( $condition ){ // condition => boolean
    // si la condition est true alors exécuter les traitements dans les accolades { }
    // si la condition est false alors ignorer les traitements dans les accolades { }
}

$age = 10 ;

if($age < 18){
    // traitement 1
}else if ($age < 60){
    // traitement 2
}else {
    // traitement par défaut 
}

// il existe une deuximème structure à connaitre if elseif else 
// si une condition est TRUE alors exécuter le traitement et sortir du bloc
// si toutes les conditions sont FALSE alors exécuter le else 

```
