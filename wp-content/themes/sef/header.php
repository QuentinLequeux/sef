<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="Quentin Lequeux">
    <meta name="keywords" content="">
    <link rel="stylesheet" href="<?= dw_asset('css/style.css'); ?>">
    <title>Service d'Entraide Familiale - Huy</title>
</head>
<body itemscope="" itemtype="https://schema.org/Organization">
<header>
    <h1 class="sro">
        <?= get_bloginfo('name') ?>
    </h1>
    <nav class="nav">
        <div class="nav__wrapper">
            <h2 class="sro" aria-level="2">
                Navigation principale
            </h2>
            <?php wp_nav_menu(['theme_location' => 'main']); ?>
        </div>
        <div class="burger">
            <input type="checkbox" class="burger-shower" id="burger">
            <label class="hamburger" for="burger">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </label>
            <ul class="burger-menu">
                <li class="burger-item"><a href="http://localhost:8888/accueil/">Accueil</a></li>
                <li class="burger-item"><a href="http://localhost:8888/nous-soutenir/">Nous&nbsp;soutenir</a></li>
                <li class="burger-item"><a href="http://localhost:8888/boutiques/">Boutiques</a></li>
                <li class="burger-item"><a href="http://localhost:8888/actualites/">Actualit&eacute;s</a></li>
                <li class="burger-item"><a href="http://localhost:8888/contact/">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>