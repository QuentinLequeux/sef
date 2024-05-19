<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?= wp_head(); ?>
    <link rel="stylesheet" href="<?= dw_asset('css/style.css'); ?>">
</head>
<body>
<header>
    <h1 class="sro">
        <?= get_bloginfo('name') ?>
    </h1>
    <nav class="nav">
        <div class="wrapper">
            <h2 class="sro">Navigation principale</h2>
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
                <li class="burger-item"><a href="http://localhost:8888/nous-soutenir/">Accueil</a></li>
                <li class="burger-item"><a href="http://localhost:8888/nous-soutenir/">Nous&nbsp;soutenir</a></li>
                <li class="burger-item"><a href="http://localhost:8888/nous-soutenir/">Boutiques</a></li>
                <li class="burger-item"><a href="http://localhost:8888/nous-soutenir/">Actualités</a></li>
                <li class="burger-item"><a href="http://localhost:8888/nous-soutenir/">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>