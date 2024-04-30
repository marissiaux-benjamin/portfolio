<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= dw_asset('css/reset.css'); ?>">
    <link rel="stylesheet" href="<?= dw_asset('css/accueil.css'); ?>">
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
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <?= get_the_content() ?>
    <?php endwhile; endif; ?>
</header>
