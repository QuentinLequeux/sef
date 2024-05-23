<?php
/*
Template Name: Accueil
*/
?>
<?= get_header(); ?>
    <main>
        <section class="home">
                <div class="home__wrapper">
                    <h2 class="home__title" aria-level="2" role="heading">
                        <?= get_the_title(114) ?>
                    </h2>
                    <p class="home__text" itemprop="description">
                        <?= get_the_content(null, false, 114); ?>
                    </p>
                </div>
                <div class="home__image">
                    <img src="/wp-content/themes/sef/resources/img/sef.jpg" width="500" height="500" alt="illustration de plusieurs personnes se tenant la main">
                </div>
        </section>
        <section class="description">
            <div class="description__background">
                <div class="description__image">
                    <img src="/wp-content/themes/sef/resources/img/donate.jpg" width="600" height="400" alt="image de cartons de donations">
                </div>
                <div class="description__support">
                    <h2 class="description__title" aria-level="2" role="heading">
                        <?= get_the_title(131) ?>
                    </h2>
                    <p class="description__text">
                        <?= get_the_content(null, false, 131); ?>
                    </p>
                    <a class="description__button" href="http://localhost:8888/nous-soutenir/" title="Vers la page nous soutenir">Nous&nbsp;soutenir</a>
                </div>
            </div>
        </section>
        <section class="shop">
            <div class="shop__background">
                <div class="shop__image">
                    <img src="/wp-content/themes/sef/resources/img/depot.jpg" width="600" height="400" alt="image du dépôt de l'association">
                </div>
                <div class="shop__support">
                    <h2 class="shop__title" aria-level="2" role="heading">
                        <?= get_the_title(158) ?>
                    </h2>
                    <p class="shop__text">
                        <?= get_the_content(null, false, 158); ?>
                    </p>
                    <a class="description__button" href="http://localhost:8888/boutiques" title="Vers la page boutiques">Boutiques</a>
                </div>
            </div>
        </section>
        <section class="housing">
            <div class="housing__background">
                <div class="housing__image">
                    <img src="/wp-content/themes/sef/resources/img/housing.jpg" width="600" height="400" alt="image d'une couverture">
                </div>
                <div class="housing__support">
                    <h2 class="housing__title" aria-level="2" role="heading">
                        <?= get_the_title(162) ?>
                    </h2>
                    <p class="housing__text">
                        <?= get_the_content(null, false, 162); ?>
                    </p>
                    <a class="description__button" href="http://localhost:8888/contact/" title="Vers la page contact">Contact</a>
                </div>
            </div>
        </section>
        <section class="contact">
            <div class="contact__background">
                <div class="contact__image">
                    <img src="/wp-content/themes/sef/resources/img/contact.jpg" width="600" height="400" alt="image d'un téléphone">
                </div>
                <div class="contact__support">
                    <h2 class="contact__title" aria-level="2" role="heading">
                        <?= get_the_title(164) ?>
                    </h2>
                    <p class="contact__text">
                        <?= get_the_content(null, false, 164); ?>
                    </p>
                    <a class="description__button" href="http://localhost:8888/contact/" title="Vers la page contact">Contact</a>
                </div>
            </div>
        </section>
        <section class="news">
            <div class="news__background">
                <h2 class="news__title" aria-level="2" role="heading">
                    Les derni&egrave;res actualit&eacute;s
                </h2>
                <a class="news__link" href="http://localhost:8888/actualites/" title="Vers la page actualités">Voir&nbsp;plus</a>
            </div>
            <div class="news__content">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </section>
    </main>
<?= get_footer(); ?>