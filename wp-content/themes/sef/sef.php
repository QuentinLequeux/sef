<?php
/*
Template Name: SEF
*/
?>
<?= get_header(); ?>
    <main class="sef">
        <?php
        $sef = new WP_Query([
            'category_name' => 'SEF',
            'posts_per_page' => 2,
            'orderby' => 'date',
        ]);
        if ($sef->have_posts()): while ($sef->have_posts()): $sef->the_post(); ?>
            <section class="sef__content">
                <div class="sef__image">
                    <img src="<?= get_field('image'); ?>" width="600" height="400" alt="image">
                </div>
                <div class="sef__description">
                    <h2 aria-level="2" role="heading" itemprop="name">
                        <?= get_the_title(); ?>
                    </h2>
                    <p itemprop="description">
                        <?= get_the_content(); ?>
                    </p>
                </div>
            </section>
        <?php endwhile;
        else: echo '<p>Aucun contenu disponible</p>';
        endif; ?>
        <section class="sef__content">
            <div class="sef__image">
                <img src="/wp-content/themes/sef/resources/img/rapport.jpg" width="600" height="400" alt="image de graphiques et statistiques">
            </div>
            <div class="sef__description">
                <h2 aria-level="2" role="heading">
                    <?= get_the_title(291); ?>
                </h2>
                <a class="sef__button" href="<?= get_field('fichier', 291); ?>" title="Télecharger le rapport">
                    <?= get_the_content(null, false, 291); ?>
                </a>
            </div>
        </section>
    </main>
<?= get_footer(); ?>