<?php 
session_start();
require_once "../functions/database.php";
require_once "../functions/posts.php";
require_once "../data/champions.php";
require_once "../functions/champion_icons.php";
require_once "../functions/role_icons.php";
require_once "../partials/player_pagination.php";
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

        <form method="GET" class="filtres-bar" id="filtresForm">
            <input type="text" name="search" id="rechercheInput" placeholder="Rechercher un pseudo..." value="<?php echo htmlspecialchars($search); ?>">

            <select name="role" id="filtreRole">
                <option value="">Tous les rôles</option>
                <option value="top" <?php echo $role === "top" ? "selected" : ""; ?>>Top</option>
                <option value="jungle" <?php echo $role === "jungle" ? "selected" : ""; ?>>Jungle</option>
                <option value="mid" <?php echo $role === "mid" ? "selected" : ""; ?>>Mid</option>
                <option value="adc" <?php echo $role === "adc" ? "selected" : ""; ?>>Adc</option>
                <option value="support" <?php echo $role === "support" ? "selected" : ""; ?>>Support</option>
            </select>

            <select name="rank" id="filtreRang">
                <option value="">Tous les rangs</option>
                <?php
                $rangsDisponibles = ["iron" => "Fer", "bronze" => "Bronze", "silver" => "Argent", "gold" => "Or", "platinum" => "Platine", "emerald" => "Emeraude", "diamond" => "Diamant", "master" => "Master", "grandmaster" => "Grandmaster", "challenger" => "Challenger"];
                foreach ($rangsDisponibles as $valeur => $label) {
                    $selected = ($rank === $valeur) ? "selected" : "";
                    echo "<option value=\"$valeur\" $selected>$label</option>";
                }
                ?>
            </select>

            <select name="champion" id="filtreChampion">
                <option value="">Tous les champions</option>
                <?php foreach ($champions as $champ) {
                    $selected = ($champion === $champ) ? "selected" : "";
                    echo "<option value=\"" . htmlspecialchars($champ) . "\" $selected>" . htmlspecialchars($champ) . "</option>";
                } ?>
            </select>

            <select name="sort" id="triSelect">
                <option value="defaut" <?php echo $sort === "defaut" ? "selected" : ""; ?>>Trier par...</option>
                <option value="nom-asc" <?php echo $sort === "nom-asc" ? "selected" : ""; ?>>Pseudo (A-Z)</option>
                <option value="nom-desc" <?php echo $sort === "nom-desc" ? "selected" : ""; ?>>Pseudo (Z-A)</option>
                <option value="rang" <?php echo $sort === "rang" ? "selected" : ""; ?>>Rang (croissant)</option>
            </select>
        </form>

        <div class="posts-grid" id="postsGrid">
            <?php foreach ($posts as $post) { ?>
                <div class="post-card">
                    <a href="player_post_details.php?id=<?php echo $post["id"]; ?>" class="post-card-link">
                        <h4 class="post-card-title"><?php echo $post["riot_username"]; ?></h4>

                        <div class="post-card-row">
                            <span class="post-card-label">Rôle :</span>
                            <div class="role-icons-list">
                                <?php
                                $rolesList = explode(",", $post["role"]);
                                foreach ($rolesList as $r) {
                                    echo get_role_icon_html(trim($r));
                                }
                                ?>
                            </div>
                        </div>
                        <div class="post-card-row">
                            <span class="post-card-label">Rang :</span>
                            <span class="post-card-value post-card-rank"><?php echo $post["rank"]; ?></span>
                        </div>
                        <div class="post-card-row">
                            <span class="post-card-label">Champions :</span>
                            <div class="champion-icons-list">
                                <?php
                                $championsList = explode(",", $post["champion"]);
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

                        <p class="post-card-description"><?php echo $post["description"]; ?></p>

                        <div class="post-card-footer">
                            Discord : <span class="post-card-discord"><?php echo $post["discord"]; ?></span>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>

        <div class="pagination">
            <?php if ($page > 1) { ?>
                <a href="?<?php echo build_filters_querystring(["page" => $page - 1]); ?>" class="pagination-link">&laquo; Précédent</a>
            <?php } ?>

            <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                <a href="?<?php echo build_filters_querystring(["page" => $i]); ?>" class="pagination-link <?php echo ($i === $page) ? 'pagination-active' : ''; ?>">
                    <?php echo $i; ?>
                </a>
            <?php } ?>

            <?php if ($page < $total_pages) { ?>
                <a href="?<?php echo build_filters_querystring(["page" => $page + 1]); ?>" class="pagination-link">Suivant &raquo;</a>
            <?php } ?>
        </div>
    </div>

    <script>
        
        document.getElementById("filtresForm").querySelectorAll("select").forEach(el => {
            el.addEventListener("change", () => document.getElementById("filtresForm").submit());
        });

        
        let timeoutRecherche;
        document.getElementById("rechercheInput").addEventListener("input", () => {
            clearTimeout(timeoutRecherche);
            timeoutRecherche = setTimeout(() => {
                document.getElementById("filtresForm").submit();
            }, 500);
        });
    </script>
</body>
</html>