<?php
/*
Template Name: Shop
 */
?>
<?= get_header(); ?>
    <main class="shopp">
        <h2 class="map__title" aria-level="2"><?= get_the_title(181) ?></h2>
        <div class="map"></div>
        <section class="shop1">
            <div class="shop1__image">
                <img src="/wp-content/themes/sef/resources/img/bric-brac.jpg">
            </div>
            <div class="shop1__support">
                <h2 class="shop1__title" aria-level="2">
                    <?= get_the_title(166) ?>
                </h2>
                <p class="shop1__text">
                    <?= get_the_content(null, false, 166); ?>
                </p>
            </div>
        </section>
        <section class="shop2">
            <div class="shop2__image">
                <img src="/wp-content/themes/sef/resources/img/bouquinerie.jpg">
            </div>
            <div class="shop2__support">
                <h2 class="shop2__title" aria-level="2">
                    <?= get_the_title(176) ?>
                </h2>
                <p class="shop2__text">
                    <?= get_the_content(null, false, 176); ?>
                </p>
            </div>
        </section>
        <section class="shop3">
            <div class="shop3__image">
                <img src="/wp-content/themes/sef/resources/img/depot.jpg">
            </div>
            <div class="shop3__support">
                <h2 class="shop3__title" aria-level="2">
                    <?= get_the_title(179) ?>
                </h2>
                <p class="shop3__text">
                    <?= get_the_content(null, false, 179); ?>
                </p>
            </div>
        </section>
    </main>
<?= get_footer(); ?>