<?php
/*
Template Name: contacte-form
*/
?>
<?php
get_header()
?>

<main class="main-mention">
    <?= get_the_content() ?>
    <p class="main-mention__instruction-form">Faites attention&nbsp;! Tous les champs du formulaire sont
        obligatoires.</p>
    <?= apply_filters('the_content', '[contact-form-7 id="0f3e003" title="contact"]') ?>
</main>

<?= get_footer() ?>
