<?php
/*
Template Name: Contact
 */
?>
<?= get_header(); ?>
    <main class="contact-page">
        <div class="contact-page__background">
            <h2 class="contact-page__title">Nous contacter</h2>
        </div>
        <section class="form">
            <div class="form__info"></div>
            <div class="form__contact">
                <h2>Formulaire de contact</h2>
                <p>Les champs marqués d'un * sont obligatoires</p>
                <?= apply_filters('the_content', '[contact-form-7 id="1d31e04" title="Contact form 1"]'); ?>
            </div>
        </section>
    </main>
<?= get_footer(); ?>