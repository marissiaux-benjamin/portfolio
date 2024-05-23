<?php

const BASE_PATH = __DIR__;
require BASE_PATH . '/../../../vendor/autoload.php';

use Core\Database;


try {
    new Database(BASE_PATH . '/.env.local.ini');
} catch (PDOException) {
    echo "failed connection to data base";
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Confirmation</title>
</head>
<body>
<h1 class="hidden">Message validé</h1>
<main class="main">
    <h2 class="hidden">main title</h2>
    <section class="main__validation">
        <h3 class="main__validation__title">Hourra&nbsp;!</h3>
        <p class="main__validation__text">Votre message &agrave; bien &eacute;t&eacute; envoy&eacute;&nbsp;!</p>
        <p class="main__validation__text">Plus qu'&agrave; attendre une r&eacute; de ma part.</p>
        <a href="http://portfolio.test/accueil/" class="main__validation__btn">Revenir &agrave; l'accueil</a>
    </section>
</main>
</body>
</html>



