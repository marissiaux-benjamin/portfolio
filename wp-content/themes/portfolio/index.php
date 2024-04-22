<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php dw_asset('css/accueil.css'); ?>">
</head>
<body>
<header>
    <section>
    <?php if (have_posts()): while (have_posts()): the_post(); // Ouverture de "The Loop" de Wordpress ?>
        <h2><?= get_the_title(); ?></h2>
        <?= get_the_content(); ?>
    <?php endwhile; endif; ?>

    </section>
</header>
<main>
</main>
<footer>

</footer>
</body>
</html>


