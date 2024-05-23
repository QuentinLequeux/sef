<?php
/*
Template Name: Nous soutenir
 */
?>
<?= get_header(); ?>
<main class="help" itemscope="" itemtype="https://schema.org/Grant" itemprop="funding">
    <div class="help__background">
        <h2 class="help__title" aria-level="2" role="heading">
            Comment nous soutenir&nbsp;?
        </h2>
    </div>
    <section class="donate">
        <div class="donate__image">
            <img src="/wp-content/themes/sef/resources/img/help.jpg" width="600" height="400" alt="Image d'une tirelire">
        </div>
        <div class="donate__support">
            <h2 class="donate__title" aria-level="2" role="heading" itemprop="name">
                <?= get_the_title(194) ?>
            </h2>
            <p class="donate__text">
                <?= get_the_content(null, false, 194); ?>
            </p>
            <div class="donate__warning" itemprop="description">
                <?= get_the_content(null, false, 200); ?>
            </div>
        </div>
    </section>
    <section class="materials">
        <div class="materials__image">
            <img src="/wp-content/themes/sef/resources/img/donate2.jpg" width="600" height="400" alt="Plusieurs objets de seconde main sur une table">
        </div>
        <div class="materials__support">
            <h2 class="materials__title" aria-level="2" role="heading" itemprop="name">
                <?= get_the_title(202) ?>
            </h2>
            <p class="materials__text" itemprop="description">
                <?= get_the_content(null, false, 202); ?>
            </p>
            <a class="contact__button" href="http://localhost:8888/contact/" title="Vers la page de contact">Contactez-nous</a>
        </div>
    </section>
    <section class="volunteer">
        <div class="volunteer__image">
            <img src="/wp-content/themes/sef/resources/img/volunteer.jpg" width="600" height="400" alt="Image des bénévoles de l'association">
        </div>
        <div class="volunteer__support">
            <h2 class="volunteer__title" aria-level="2" role="heading" itemprop="name">
                <?= get_the_title(204) ?>
            </h2>
            <p class="volunteer__text" itemprop="description">
                <?= get_the_content(null, false, 204); ?>
            </p>
            <a class="contact__button" href="http://localhost:8888/contact/" title="Vers la page de contact">Contactez-nous</a>
        </div>
    </section>
    <section class="legs">
        <div class="legs__image">
            <img src="/wp-content/themes/sef/resources/img/legs.jpg" width="600" height="400" alt="Image d'un livre ouvert avec une paire de lunettes">
        </div>
        <div class="legs__support">
            <h2 class="legs__title" aria-level="2" role="heading" itemprop="name">
                <?= get_the_title(206) ?>
            </h2>
            <p class="legs__text" itemprop="description">
                <?= get_the_content(null, false, 206); ?>
            </p>
            <a class="contact__button" href="http://localhost:8888/contact/" title="Vers la page de contact">Contactez-nous</a>
        </div>
    </section>
    <section class="support">
        <h2 class="support__title" aria-level="2" role="heading">
            Diff&eacute;rentes mani&egrave;res de nous soutenir
        </h2>
        <div class="support__background">
            <div class="support__shop">
                <h3 aria-level="3" role="heading" itemprop="name">
                    Boutiques
                </h3>
                <a href="http://localhost:8888/boutiques/" title="Vers la page boutiques">
                    <img src="/wp-content/themes/sef/resources/img/depot.jpg" width="600" height="350" alt="image du dépot de l'association">
                </a>
            </div>
            <div class="support__event">
                <h3 aria-level="3" role="heading" itemprop="name">
                    &Eacute;v&egrave;nements
                </h3>
                <a href="http://localhost:8888/actualites/" title="Vers la page actualités">
                    <img src="/wp-content/themes/sef/resources/img/event.jpg" width="600" height="350" alt="Image d'un feu d'artifice">
                </a>
            </div>
        </div>
    </section>
</main>
<?= get_footer(); ?>