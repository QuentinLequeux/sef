<?php
/*
Template Name: Actualités
*/
?>
<?= get_header(); ?>
    <main class="news-page">
        <section class="news-page__banner">
            <h2 class="news-page__title" aria-level="2" role="heading">
                Actualit&eacute;s
            </h2>
        </section>
        <section>
            <div class="news-page__container">
                <?php
                $news = new WP_Query([
                    'category_name' => 'Actualités',
                    'posts_per_page' => 9,
                    'orderby' => 'date',
                ]);
                if ($news->have_posts()): while ($news->have_posts()): $news->the_post(); ?>
                    <article itemprop="publishingPrinciples" itemscope="" itemtype="https://schema.org/Article">
                        <a class="news-page__image" href="<?= get_permalink(); ?>" title="Vers la page <?= get_the_title(); ?>">
                            <img src="<?= get_field('image'); ?>" width="400" height="250" alt="image d'actualités">
                        </a>
                        <h3 aria-level="3" role="heading" itemprop="headline">
                            <?= get_the_title(); ?>
                        </h3>
                        <p itemprop="datePublished" content="<?= get_the_date('Y-m-d'); ?>">
                            <?= get_the_date(); ?>
                        </p>
                        <p itemprop="articleBody">
                            <?= get_the_content(); ?>
                        </p>
                        <a class="news-page__button" href="<?= get_permalink(); ?>" title="Vers la page <?= get_the_title(); ?>">Lire&nbsp;la&nbsp;suite</a>
                    </article>
                <?php endwhile;
                else: echo '<p>Aucune actualit&eacute;s disponible</p>';
                endif; ?>
            </div>
        </section>
    </main>
<?= get_footer(); ?>