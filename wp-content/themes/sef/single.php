<?= get_header(); ?>
    <main class="articles">
        <section class="articles__wrapper" itemscope="" itemtype="https://schema.org/Article">
            <h2 aria-level="2" role="heading" itemprop="headline">
                <?= get_the_title(); ?>
            </h2>
            <p itemprop="datePublished" content="<?= get_the_date('Y-m-d'); ?>">
                <?= get_the_date(); ?>
            </p>
            <img src="<?= get_field('image'); ?>" width="500" height="300" alt="image">
            <p itemprop="articleBody">
                <?= get_the_content(); ?>
            </p>
        </section>
        <section class="article">
            <div class="article__background">
                <h2 aria-level="2" role="heading">
                    Les derni&egrave;res actualit&eacute;s
                </h2>
                <a href="http://localhost:8888/actualites/" title="Vers la page actualités">Voir&nbsp;plus</a>
            </div>
            <div class="article__wrapper">
                <?php
                $news = new WP_Query([
                    'category_name' => 'Actualités',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                ]);
                if ($news->have_posts()): while ($news->have_posts()): $news->the_post(); ?>
                    <article itemprop="publishingPrinciples" itemscope="" itemtype="https://schema.org/Article">
                        <a class="article__image" href="<?= get_permalink(); ?>" title="Vers la page <?= get_the_title(); ?>">
                            <img src="<?= get_field('image'); ?>" width="400" height="250" alt="image">
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
                        <a class="article__button" href="<?= get_permalink(); ?>" title="Vers la page <?= get_the_title(); ?>">Lire&nbsp;la&nbsp;suite</a>
                    </article>
                <?php endwhile;
                else: echo '<p>Aucune actualit&eacute;s disponible</p>';
                endif; ?>
            </div>
        </section>
    </main>
<?= get_footer(); ?>