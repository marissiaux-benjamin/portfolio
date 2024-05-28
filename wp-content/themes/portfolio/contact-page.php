<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://portfolio.test/wp-content/themes/portfolio/ressources/css/reset.css">
    <link rel="stylesheet" href="http://portfolio.test/wp-content/themes/portfolio/ressources/css/style.css">
    <title>contact</title>
</head>
<body>
<h1 class="hidden_title">contact</h1>
<header class="header">
    <h2 class="header__icon">
        <a href="http://portfolio.test/accueil/">
            <img src="http://portfolio.test/wp-content/uploads/2024/04/logo.svg"
                 alt="Logo de Benjamin Marissiaux représentant un B et un M majustcule" height="40" width="40">
        </a>
    </h2>
    <nav class="mobile-menu">
        <h3 class="hidden_title">navigation principale</h3>
        <input type="checkbox" id="checkbox" class="mobile-menu__checkbox">
        <label for="checkbox" class="mobile-menu__btn">
            <span class="mobile-menu__icon"></span>
        </label>
        <div class="mobile-menu__container">
            <ul class="mobile-menu__list">
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="http://portfolio.test/accueil/"
                       title="Aller vers la page Accueil">Accueil</a>
                </li>
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="http://portfolio.test/a-propos-de-moi/"
                       title="Aller vers la page A propos">A propos</a>
                </li>
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="http://portfolio.test/contact/"
                       title="Aller vers la page contact">contact</a>
                </li>
                <li class="mobile-menu__item">
                    <a class="mobile-menu__link" href="http://portfolio.test/projets/"
                       title="Aller vers la page Projets">Projets</a>
                </li>
                <li>
                    <a href="http://portfolio.test/contacter.php/" title="Aller vers la page contact" class="mobile-menu__link">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</header>


<main class="main">
    <section class="wp-block-group main__landing-contact">
        <h2 class="wp-block-heading main__landing-contact__title">Contact</h2>


        <!-- wp:html -->
        <div class="wp-block-image size-large main__landing-contact__div"><img src="http://portfolio.test/wp-content/uploads/2024/04/fleche.svg" alt="flèche blanche pointant vers le bas de l'écran" class="wp-image-43 main__landing-contact__div__image"/></div>
        <!-- /wp:html --></section>
    <!-- /wp:group -->

    <!-- wp:html -->
    <form action="http://portfolio.test/wp-content/themes/portfolio/contact.php" method="POST" class="main__form">
        <input autocomplete="off" required name="name" type="text" id="name" class="main__form__input-name" placeholder="prenom et nom">
        <label for="name" class="main__form__label-name">Prénom et nom *</label>

        <input required name="mail" type="email" id="mail" class="main__form__input-mail" placeholder="ex: ben.maru@gmail.com">
        <label for="mail" class="main__form__label-mail">Votre email *</label>

        <textarea required name="message" id="message" cols="30" rows="10" class="main__form__input-text" placeholder="Votre message"></textarea>
        <label for="message" class="main__form__label-text">Votre message *</label>
        <input name="soumettre" type="submit" value="Envoyer" class="main__form__btn">
    </form>
    <!-- /wp:html --></main>

<footer class="footer">
    <h2 class="hidden_title"></h2>
    <section class="footer__section">
        <h3 class="footer__section__title">Coordonnées</h3>
        <ul class="footer__section__list">
            <li class="footer__section__list__item">
                tel&nbsp;:&nbsp;<a href="tel:+32474405122" title="Téléphoner à Benjamin Marissiaux"
                                   class="footer__section__list__item__link">+32&nbsp;474&nbsp;40&nbsp;51&nbsp;22</a>
            </li>
            <li class="footer__section__list__item">
                mail&nbsp;:&nbsp;<a href="mailto:ben.marissiaux@gmail.com" class="footer__section__list__item__mail">ben.marissiaux@gmail.com</a>
            </li>
            <li class="footer__section__list__item">
                Adresse&nbsp;:&nbsp;Grand&lsquo;Route 342, 4347 Fexhe-le-haut-Clocher
            </li>
        </ul>
    </section>
    <section class="footer__section">
        <h3 class="footer__section__title">Réseaux</h3>
        <ul class="footer__section__socials-list">
            <li class="footer__section__socials-list__item">
                <a href="https://www.instagram.com/ben.m.0_o/" title="Aller sur l'instagram de Benjamin Marissiaux"
                   class="footer__section__socials-list__item__insta-link">
                    insta
                </a>
            </li>
            <li class="footer__section__socials-list__item">
                <a href="https://github.com" title="Aller sur le github de Benjamin Marissiaux"
                   class="footer__section__socials-list__item__github-link">
                    github
                </a>
            </li>
            <li class="footer__section__socials-list__item">
                <a href="https://www.linkedin.com/in/benjamin-marissiaux-2aa7bb309/"
                   title="Aller sur le linkedin de Benjamin Marissiaux"
                   class="footer__section__socials-list__item__linkedin-link">
                    linkedin
                </a>
            </li>
        </ul>
    </section>
    <section class="footer__section">
        <h3 class="footer__section__title">Navigation</h3>
        <ul class="footer__section__list">
            <li class="footer__section__list__item">
                <a class="footer__section__list__item__nav" href="http://portfolio.test/projets/"
                   title="Aller vers la page Projets">Projets</a>
            </li>
            <li class="footer__section__list__item">
                <a class="footer__section__list__item__nav" href="http://portfolio.test/contact/"
                   title="Aller vers la page contact">contact</a>
            </li>
            <li class="footer__section__list__item">
                <a class="footer__section__list__item__nav" href="http://portfolio.test/a-propos-de-moi/"
                   title="Aller vers la page A propos">A propos</a>
            </li>
            <li class="footer__section__list__item">
                <a class="footer__section__list__item__nav" href="http://portfolio.test/accueil/"
                   title="Aller vers la page Accueil">Accueil</a>
            </li>
        </ul>
    </section>
</footer>
</body>
</html>




