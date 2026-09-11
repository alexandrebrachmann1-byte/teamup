<?php
session_start();
require_once "../functions/posts.php";
require_once "../functions/champion_icons.php";
require_once "../functions/role_icons.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails d'annonce de joueur</title>
    <link rel="stylesheet" href="/teamup/assets/css/style.css">
</head>
<body>
    <?php require_once "../partials/header.php"; ?>
        <div class="page-content">
                <?php 
                $playerPost = get_player_post_by_id($_GET["id"]);
                $playerPost = $playerPost[0];
                ?>
            <div class="post-detail-wrapper">
                <div class="post-card">
                    <h4 class="post-card-title"><?php echo $playerPost["riot_username"]; ?></h4>

                    <div class="post-card-row">
                            <span class="post-card-label">Rôle :</span>
                            <div class="role-icons-list">
                                <?php
                                $rolesList = explode(",", $playerPost["role"]);
                                foreach ($rolesList as $role) {
                                    echo get_role_icon_html(trim($role));
                                }
                                ?>
                            </div>
                        </div>
                    <div class="post-card-row">
                        <span class="post-card-label">Rang :</span>
                        <span class="post-card-value post-card-rank"><?php echo $playerPost["rank"]; ?></span>
                    </div>
                    <div class="post-card-row">
                        <span class="post-card-label">Champions :</span>
                        <div class="champion-icons-list">
                            <?php
                            $championsList = explode(",", $playerPost["champion"]);
                            foreach ($championsList as $championName) {
                                $championName = trim($championName);
                            ?>
                                <img 
                                    src="<?php echo get_champion_icon_url($championName); ?>" 
                                    alt="<?php echo htmlspecialchars($championName); ?>" 
                                    title="<?php echo htmlspecialchars($championName); ?>" 
                                    class="champion-icon-mini"
                                >
                            <?php } ?>
                        </div>
                    </div>

                    <p class="post-card-description"><?php echo $playerPost["description"]; ?></p>

                    <div class="post-card-footer">
                        Discord : <span class="post-card-discord"><?php echo $playerPost["discord"]; ?></span>
                    </div>
                </div>
            </div>












        </div>
</body>
</html>