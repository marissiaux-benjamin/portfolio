<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= dw_asset('css/reset.css'); ?>">
    <link rel="stylesheet" href="<?= dw_asset('css/style.css'); ?>">
    <title>Accueil</title>
</head>
<body>
<h1 class="hidden_title">Accueil</h1>
<header>
    <h2>
        <a href="http://portfolio.test/accueil/">
            <img src="http://portfolio.test/wp-content/uploads/2024/04/logo.svg"
                 alt="Logo de Benjamin Marissiaux représentant un B et un M majustcule" height="40" width="40">
        </a>
    </h2>
    <nav>
        <ul>
            <?php foreach (dw_get_navigation_links('main') as $link): ?>
                <li class="main_nav_container_item">
                    <a class="nav_icon no_text_decoration" href="<?= $link->url ?>"
                       title="Aller vers la page <?= $link->label ?>"><?= $link->label ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>
