<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- https://srihash.org/ -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" integrity="sha384-EgpZj9yj4baOExXLVlCOxdZZy8x2J7RJCkzg2oc+sTPBQicEFI13jFvu3bJTJdxY" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link href="/public/style.css" rel="stylesheet">

  </head>
  <body>
    <header class="bg-warning">
        <nav class="navbar navbar-expand container navbar-dark">
            <span class="navbar-brand">
                <a href="<?= $router->generate("home")  ?>" class="link-light text-decoration-none">
                TP Final Analyste CyberSécurité
                </a>
            </span>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?= $router->generate("home")  ?>" class="nav-link">Accueil</a>
                </li>
                <?php if(!isset($_SESSION["user"])) : ?>
                <li class="nav-item">
                    <a href="<?= $router->generate("login")  ?>" class="nav-link">Connexion</a>
                </li>
                <?php endif ?>
            </ul>
            <?php if(isset($_SESSION["user"])) : ?>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button">
                        gestion
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="<?= $router->generate("admin_article_new")  ?>" class="dropdown-item">add Article</a></li>
                        <li><a href="<?= $router->generate("admin_user_new")  ?>" class="dropdown-item">add user</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?= $router->generate("admin_article_new")  ?>" class="nav-link">Ajouter article</a>
                </li>
                <li class="nav-item">
                    <a href="<?= $router->generate("admin_user_new")  ?>" class="nav-link">Ajouter gestionnaire</a>
                </li>
                <li class="nav-item">
                    <a href="<?= $router->generate("logout")  ?>" class="nav-link">Déconnexion</a>
                </li>
            </ul>
            <?php endif ?>
        </nav>
    </header>