<?php
/*
Template Name: Boutiques
 */
?>
<?= get_header(); ?>
    <main class="shop-page" itemscope="" itemtype="https://schema.org/LocalBusiness" itemprop="parentOrganization">
        <section class="shop-page__background">
            <h2 class="shop-page__title" aria-level="2" role="heading">
                Où trouver nos magasins&nbsp;?
            </h2>
        </section>
        <div id="map"></div>
        <section class="shop1">
            <div class="shop1__image">
                <img src="/wp-content/themes/sef/resources/img/bric-brac.jpg" width="600" height="400" alt="Image d'un Bric à Brac">
            </div>
            <div class="shop1__support">
                <h2 class="shop1__title" aria-level="2" role="heading" itemprop="name">
                    <?= get_the_title(166) ?>
                </h2>
                <p class="shop1__text" itemprop="description">
                    <?= get_the_content(null, false, 166); ?>
                </p>
                <p itemprop="address">
                    <?= get_the_content(null, false, 248); ?>
                </p>
                <p itemprop="telephone">
                    <?= get_the_content(null, false, 252); ?>
                </p>
            </div>
        </section>
        <section class="shop2">
            <div class="shop2__image">
                <img src="/wp-content/themes/sef/resources/img/bouquinerie.jpg" width="600" height="400" alt="Image de la Bouquinerie du p'tit Augustin">
            </div>
            <div class="shop2__support">
                <h2 class="shop2__title" aria-level="2" role="heading" itemprop="name">
                    <?= get_the_title(176) ?>
                </h2>
                <p class="shop2__text" itemprop="description">
                    <?= get_the_content(null, false, 176); ?>
                </p>
                <p itemprop="address">
                    <?= get_the_content(null, false, 255); ?>
                </p>
                <p itemprop="telephone">
                    <?= get_the_content(null, false, 257); ?>
                </p>
            </div>
        </section>
        <section class="shop3">
            <div class="shop3__image">
                <img src="/wp-content/themes/sef/resources/img/depot.jpg" width="600" height="400" alt="Image du dépôt de l'association">
            </div>
            <div class="shop3__support">
                <h2 class="shop3__title" aria-level="2" role="heading" itemprop="name">
                    <?= get_the_title(179) ?>
                </h2>
                <p class="shop3__text" itemprop="description">
                    <?= get_the_content(null, false, 179); ?>
                </p>
                <p itemprop="address">
                    <?= get_the_content(null, false, 261); ?>
                </p>
                <p itemprop="telephone">
                    <?= get_the_content(null, false, 263); ?>
                </p>
            </div>
        </section>
    </main>
<?= get_footer(); ?>