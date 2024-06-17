<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= dw_asset('css/reset.css'); ?>">
    <link rel="stylesheet" href="<?= dw_asset('css/style.css'); ?>">
    <title><?= get_the_title() ?></title>
</head>
<body>
<h1 class="hidden_title"><?= get_the_title() ?></h1>
<header class="header">
    <h2 class="header__icon">
        <a href="http://portfolio.test/accueil/">
            <img src="http://portfolio.test/wp-content/uploads/2024/04/logo.svg"
                 alt="Logo de Benjamin Marissiaux représentant un B et un M majustcule" height="40" width="40">
        </a>
    </h2>
    <nav class="mobile-menu reveal">
        <h3 class="hidden_title">navigation principale</h3>
        <input type="checkbox" id="checkbox" class="mobile-menu__checkbox">
        <label for="checkbox" class="mobile-menu__btn">
            <span class="mobile-menu__icon"></span>
        </label>
        <div class="mobile-menu__container reveal">
            <ul class="mobile-menu__list">
                <?php foreach (dw_get_navigation_links('main') as $link): ?>
                    <li class="mobile-menu__item">
                        <a class="mobile-menu__link" href="<?= $link->url ?>"
                           title="Aller vers la page <?= $link->label ?>"><?= $link->label ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </nav>
</header>

