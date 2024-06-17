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

    <p class="main__instruction-form">Faites attention&nbsp;! Tous les champs du formulaire sont obligatoires.</p>
    <div class="main__form-container">

        <form action="<?= home_url() . $_SERVER['REQUEST_URI'] ?>" method="POST" class="main__form-container__form">
            <input autocomplete="off" name="name" type="text" id="name" class="main__form-container__form__input-name" placeholder="prenom et nom" >
            <label for="name" class="main__form-container__form__label-name">Prénom et nom *</label>

            <input name="mail" type="email" id="mail" class="main__form-container__form__input-mail"
                   placeholder="ex: ben.maru@gmail.com">
            <label for="mail" class="main__form-container__form__label-mail">Votre email *</label>


            <textarea name="message" id="message" cols="30" rows="10"
                      class="main__form-container__form__input-text"
                      placeholder="Votre message" ></textarea>
            <label for="message" class="main__form-container__form__label-text">Votre message *</label>
            <input name="soumettre" type="submit" value="Envoyer" class="main__form-container__form__btn">
        </form>
    </div>
</main>
<?php var_dump(home_url() . $_SERVER['REQUEST_URI']) ?>
<?php get_footer(); ?>




