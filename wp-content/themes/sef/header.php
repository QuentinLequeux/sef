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
<h1>
    <?= get_bloginfo('name') ?>
</h1>
<nav class="nav">
    <div class="wrapper">
        <h2 class="sro">Navigation principale</h2>
        <?php wp_nav_menu(['theme_location' => 'main']); ?>
    </div>
</nav>