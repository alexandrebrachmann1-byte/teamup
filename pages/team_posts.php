<?php 
session_start();
require_once "../functions/database.php";
require_once "../functions/posts.php";
?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chercher une équipe</title>
    <link rel="stylesheet" href="/teamup/assets/css/style.css">
</head>
<body>
    <?php require_once "../partials/header.php"; ?>

    <div class="page-content">
        <h4 class="form-title">Chercher une équipe</h4>

        <div class="posts-grid">
            <?php
            $teamsPosts = get_all_teams_posts();

            foreach ($teamsPosts as $teamPost) { ?>
                <div class="post-card">
                    <a href="team_post_details.php?id=<?php echo $teamPost["id"]; ?>" class="post-card-link">
                        <h4 class="post-card-title"><?php echo $teamPost["name"]; ?></h4>

                        <div class="post-card-row">
                            <span class="post-card-label">Rang</span>
                            <span class="post-card-value post-card-rank"><?php echo $teamPost["rank"]; ?></span>
                        </div>
                        <div class="post-card-row">
                            <span class="post-card-label">Rôle(s) recherché(s)</span>
                            <span class="post-card-value"><?php echo $teamPost["role"]; ?></span>
                        </div>

                        <p class="post-card-description"><?php echo $teamPost["description"]; ?></p>

                        <div class="post-card-footer">
                            Discord : <span class="post-card-discord"><?php echo $teamPost["discord"]; ?></span>
                        </div>
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>