<?php
/*
Template Name: contacter
*/

require BASE_PATH . '/../../../vendor/autoload.php';

use Core\Database;


try {
    new Database(BASE_PATH . '/.env.local.ini');
} catch (PDOException) {
    echo "failed connection to data base";
}
?>

<?php
get_header()
?>

<main class="main-mention">
    <?= get_the_content() ?>

    <p class="main-mention__instruction-form">Faites attention&nbsp;! Tous les champs du formulaire sont
        obligatoires.</p>
    <div class="main-mention__form-container">

        <form action="<?= home_url() . $_SERVER['REQUEST_URI'] ?>" method="POST"
              class="main-mention__form-container__form">
            <input type="text" id="nom" name="nom" class="main-mention__form-container__form__input-name"
                   placeholder="Ex: Benjamin, Benjamin Marissiaux, Marissiaux,...">
            <label for="nom" class="main-mention__form-container__form__label-name">Nom *</label>

            <input name="mail" type="text" id="mail" class="main-mention__form-container__form__input-mail"
                   placeholder="ex: ben.maru@gmail.com">
            <label for="mail" class="main-mention__form-container__form__label-mail">Votre email *</label>

            <textarea name="message" id="message" cols="30" rows="10"
                      class="main-mention__form-container__form__input-text"
                      placeholder="Votre message"></textarea>
            <label for="message" class="main-mention__form-container__form__label-text">Votre message *</label>

            <input name="soumettre" type="submit" value="Envoyer" class="main-mention__form-container__form__btn">
        </form>
    </div>
</main>
<?php get_footer() ?>




