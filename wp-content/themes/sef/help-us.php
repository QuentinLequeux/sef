<?php
/*
Template Name: Help
 */
?>
<?= get_header(); ?>
<main class="help">
    <div class="help__background">
        <h2 class="help__title"><?= get_the_title(189) ?></h2>
    </div>
    <section class="donate">
        <div class="donate__image">
            <img src="/wp-content/themes/sef/resources/img/help.jpg" width="600" height="400">
        </div>
        <div class="donate__support">
            <h2 class="donate__title" aria-level="2">
                <?= get_the_title(194) ?>
            </h2>
            <p class="donate__text">
                <?= get_the_content(null, false, 194); ?>
            </p>
            <div class="donate__warning">
                <?= get_the_content(null, false, 200); ?>
            </div>
        </div>
    </section>
    <section class="donate2">
        <div class="donate2__image">
            <img src="/wp-content/themes/sef/resources/img/donate2.jpg" width="600" height="400">
        </div>
        <div class="donate2__support">
            <h2 class="donate2__title" aria-level="2">
                <?= get_the_title(202) ?>
            </h2>
            <p class="donate2__text">
                <?= get_the_content(null, false, 202); ?>
            </p>
        </div>
    </section>
    <section class="volunteer">
        <div class="volunteer__image">
            <img src="/wp-content/themes/sef/resources/img/volunteer.jpg" width="600" height="400">
        </div>
        <div class="volunteer__support">
            <h2 class="volunteer__title" aria-level="2">
                <?= get_the_title(204) ?>
            </h2>
            <p class="volunteer__text">
                <?= get_the_content(null, false, 204); ?>
            </p>
        </div>
    </section>
    <section class="legs">
        <div class="legs__image">
            <img src="/wp-content/themes/sef/resources/img/legs.jpg" width="600" height="400">
        </div>
        <div class="legs__support">
            <h2 class="legs__title" aria-level="2">
                <?= get_the_title(206) ?>
            </h2>
            <p class="legs__text">
                <?= get_the_content(null, false, 206); ?>
            </p>
        </div>
    </section>
    <section class="support">
        <div class="support__background">
            <h2 class="support__title"><?= get_the_title(209) ?></h2>
            <div class="support__image">
                <a href="">Boutiques</a>
            </div>
        </div>
    </section>
</main>
<?= get_footer(); ?>