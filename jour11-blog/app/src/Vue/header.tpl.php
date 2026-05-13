<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- ajouter la ligne suivante 
     google > getbootstrap > https://getbootstrap.com/ 
     Include via CDN >  -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
     <!-- ajouter la librairie Bootstrap : html css qui permet de faire de la mise en page rapidement -->
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand navbar-light bg-light">
            <span class="navbar-brand">Projet Analyste Secu</span>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?= $router->generate("home")  ?>" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="<?= $router->generate("ajouter_recette")  ?>" class="nav-link">Ajouter Une Recette</a>
                </li>
            </ul>
        </nav>
    </div>