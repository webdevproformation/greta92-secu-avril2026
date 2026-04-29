<?php 

// Navigateur SI tu as dans le html du javascript NE l'execute pas 
header("Content-Security-Policy: default-src 'none';");

echo "bonjour" ; 
?>
<script>alert("virus")</script>

// cd jour07
// php -S localhost:1235
// lancer un navigateur web 
// http://localhost:1235/02-exemple.php
// regarder l'onglet reseau 