<?php
session_start();
require_once "functions/stats.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="/teamup/assets/css/style.css">
</head>
<body>
    <?php require_once "partials/header.php"; ?>

    <div class="page-content">
        <section class="hero">
            <h1 class="hero-title">Bienvenue sur TeamUp</h1>
            <p class="hero-text">
                TeamUp est un site de recherche de coéquipier pour League of Legends.
                Créez simplement votre annonce et trouvez votre équipe.
            </p>

            <div class="hero-actions">
                <a href="/teamup/pages/player_posts.php" class="btn-hero btn-hero-primary">Cherche ton duo</a>
                <a href="/teamup/pages/team_posts.php" class="btn-hero btn-hero-secondary">Cherche ton équipe</a>
            </div>
        </section>

        <?php 
        $nbr_player_posts = total_number_of_player_post();
        echo $nbr_player_posts;
        ?>
    </div>
</body>
</html>