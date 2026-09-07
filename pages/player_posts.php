<?php 
session_start();
require_once "../functions/database.php";
require_once "../functions/posts.php";
require_once "../data/champions.php";
require_once "../functions/champion_icons.php";
require_once "../functions/role_icons.php";
?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chercher un joueur</title>
    <link rel="stylesheet" href="/teamup/assets/css/style.css">
</head>
<body>
    <?php require_once "../partials/header.php"; ?>

    <div class="page-content">
        <h4 class="form-title">Chercher un joueur</h4>
            <div class="filtres-bar">
                <input type="text" id="rechercheInput" placeholder="Rechercher un pseudo...">

                <select id="filtreRole">
                    <option value="">Tous les rôles</option>
                    <option value="Top">Top</option>
                    <option value="Jungle">Jungle</option>
                    <option value="Mid">Mid</option>
                    <option value="Adc">Adc</option>
                    <option value="Support">Support</option>
                </select>

                <select id="filtreRang">
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

                <select id="filtreChampion">
                    <option value="">Tous les champions</option>
                <?php foreach($champions as $champion): ?>
                    <option value="<?php echo "$champion"; ?>"><?php echo "$champion"; ?></option>
                <?php endforeach; ?>
                </select>

                <select id="triSelect">
                    <option value="defaut">Trier par...</option>
                    <option value="nom-asc">Pseudo (A-Z)</option>
                    <option value="nom-desc">Pseudo (Z-A)</option>
                    <option value="rang">Rang (croissant)</option>
                </select>
            </div>
        <div class="posts-grid" id="postsGrid">
            <?php 
            
            $playersPosts = get_all_players_posts();

            foreach ($playersPosts as $playerPost) { ?>
                <div class="post-card"
                    data-username="<?php echo strtolower(htmlspecialchars($playerPost["riot_username"])); ?>"
                    data-role="<?php echo strtolower(htmlspecialchars($playerPost["role"])); ?>"
                    data-rank="<?php echo strtolower(htmlspecialchars($playerPost["rank"])); ?>"
                    data-champion="<?php echo strtolower(htmlspecialchars($playerPost["champion"])); ?>">
                    <a href="player_post_details.php?id=<?php echo $playerPost["id"]; ?>" class="post-card-link">
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
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
    <script src="/teamup/assets/js/filter.js" defer></script>
</body>
</html>