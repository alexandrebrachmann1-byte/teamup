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
        $nbr_team_posts = total_number_of_team_post();
        $latest_player_post = get_latest_player_posts(5);
        $latest_team_post = get_latest_team_posts(5);
        ?>

        <section class="stats-bar">
            <div class="stat-item">
                <span class="stat-number"><?php echo $nbr_player_posts; ?></span>
                <span class="stat-label">Annonces de joueurs</span>
            </div>
            <div class="stat-item">
                <span class="stat-number"><?php echo $nbr_team_posts; ?></span>
                <span class="stat-label">Annonces d'équipes</span>
            </div>
        </section>

        <section class="latest-section">
            <h2 class="latest-title">Dernieres annonces de joueurs</h2>
            <div class="mini-grid">
                <?php foreach ($latest_player_post as $p) { ?>
                    <a href="/teamup/pages/player_post_details.php?id=<?php echo $p["id"]; ?>" class="mini-card">
                        <span class="mini-card-name"><?php echo $p["riot_username"]; ?></span>

                        <div class="mini-card-row">
                            <span class="mini-card-label">Rôle :</span>
                            <span class="mini-card-value"><?php echo $p["role"]; ?></span>
                        </div>
                        <div class="mini-card-row">
                            <span class="mini-card-label">Rang :</span>
                            <span class="mini-card-value mini-card-rank"><?php echo $p["rank"]; ?></span>
                        </div>
                    </a>
                <?php } ?>
            </div>
            <a href="/teamup/pages/player_posts.php" class="latest-more">Voir toutes les annonces joueurs →</a>
        </section>

        <section class="latest-section">
            <h2 class="latest-title">Dernières annonces d'équipes</h2>
            <div class="mini-grid">
                <?php foreach ($latest_team_post as $t) { ?>
                    <a href="/teamup/pages/team_post_details.php?id=<?php echo $t["id"]; ?>" class="mini-card">
                        <span class="mini-card-name"><?php echo $t["name"]; ?></span>

                        <div class="mini-card-row">
                            <span class="mini-card-label">Recherche :</span>
                            <span class="mini-card-value"><?php echo $t["role"]; ?></span>
                        </div>
                        <div class="mini-card-row">
                            <span class="mini-card-label">Rang :</span>
                            <span class="mini-card-value mini-card-rank"><?php echo $t["rank"]; ?></span>
                        </div>
                    </a>
                <?php } ?>
            </div>
            <a href="/teamup/pages/team_posts.php" class="latest-more">Voir toutes les annonces équipes →</a>
        </section>
    </div>
</body>
</html>