<?php 
session_start();
require_once "../functions/database.php";
require_once "../functions/posts.php";
require_once "../functions/role_icons.php";
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
            <div class="filtres-bar">
                <input type="text" id="rechercheInputTeam" placeholder="Rechercher un nom d'équipe...">

                <select id="filtreRoleTeam">
                    <option value="">Rôle recherché</option>
                    <option value="Top">Top</option>
                    <option value="Jungle">Jungle</option>
                    <option value="Mid">Mid</option>
                    <option value="Adc">Adc</option>
                    <option value="Support">Support</option>
                </select>

                <select id="filtreRangTeam">
                    <option value="">Tous les rangs</option>
                    <option value="Fer">Fer</option>
                    <option value="Bronze">Bronze</option>
                    <option value="Argent">Argent</option>
                    <option value="Or">Or</option>
                    <option value="Platine">Platine</option>
                    <option value="Emeraude">Emeraude</option>
                    <option value="Diamant">Diamant</option>
                    <option value="Master">Master</option>
                    <option value="Grandmaster">Grandmaster</option>
                    <option value="Challenger">Challenger</option>
                </select>

                <select id="triSelectTeam">
                    <option value="defaut">Trier par...</option>
                    <option value="nom-asc">Nom d'équipe (A-Z)</option>
                    <option value="nom-desc">Nom d'équipe (Z-A)</option>
                    <option value="rang">Rang (croissant)</option>
                </select>
            </div>
        <div class="posts-grid" id="postsGrid">
            <?php
            $teamsPosts = get_all_teams_posts();

            foreach ($teamsPosts as $teamPost) { ?>
                <div class="post-card"
                    data-name="<?php echo strtolower(htmlspecialchars($teamPost["name"])); ?>"
                    data-role="<?php echo strtolower(htmlspecialchars($teamPost["role"])); ?>"
                    data-rank="<?php echo strtolower(htmlspecialchars($teamPost["rank"])); ?>">
                    <a href="team_post_details.php?id=<?php echo $teamPost["id"]; ?>" class="post-card-link">
                        <h4 class="post-card-title"><?php echo $teamPost["name"]; ?></h4>

                        <div class="post-card-row">
                            <span class="post-card-label">Rang :</span>
                            <span class="post-card-value post-card-rank"><?php echo $teamPost["rank"]; ?></span>
                        </div>
                        <div class="post-card-row">
                            <span class="post-card-label">Rôle(s) Recherché(s) :</span>
                            <div class="role-icons-list">
                                <?php
                                $rolesList = explode(",", $teamPost["role"]);
                                foreach ($rolesList as $role) {
                                    echo get_role_icon_html(trim($role));
                                }
                                ?>
                            </div>
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
    <script src="/teamup/assets/js/filter.js" defer></script>
</body>
</html>