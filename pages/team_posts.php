<?php 
session_start();
require_once "../functions/database.php";
require_once "../functions/posts.php";
require_once "../functions/role_icons.php";
require_once "../partials/team_pagination.php";
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

        <form method="GET" class="filtres-bar" id="filtresForm">
            <input type="text" name="search" id="rechercheInput" placeholder="Rechercher un nom d'équipe..." value="<?php echo htmlspecialchars($search); ?>">

            <select name="role" id="filtreRole">
                <option value="">Rôle recherché</option>
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

            <select name="sort" id="triSelect">
                <option value="defaut" <?php echo $sort === "defaut" ? "selected" : ""; ?>>Trier par...</option>
                <option value="nom-asc" <?php echo $sort === "nom-asc" ? "selected" : ""; ?>>Nom d'équipe (A-Z)</option>
                <option value="nom-desc" <?php echo $sort === "nom-desc" ? "selected" : ""; ?>>Nom d'équipe (Z-A)</option>
                <option value="rang" <?php echo $sort === "rang" ? "selected" : ""; ?>>Rang (croissant)</option>
            </select>
        </form>

        <div class="posts-grid" id="postsGrid">
            <?php foreach ($team_posts as $teamPost) { ?>
                <div class="post-card">
                    <a href="team_post_details.php?id=<?php echo $teamPost["id"]; ?>" class="post-card-link">
                        <h4 class="post-card-title"><?php echo $teamPost["name"]; ?></h4>

                        <div class="post-card-row">
                            <span class="post-card-label">Rang :</span>
                            <span class="post-card-value post-card-rank"><?php echo $teamPost["rank"]; ?></span>
                        </div>
                        <div class="post-card-row">
                            <span class="post-card-label">Rôle :</span>
                            <div class="role-icons-list">
                                <?php
                                $rolesList = explode(",", $teamPost["role"]);
                                foreach ($rolesList as $r) {
                                    echo get_role_icon_html(trim($r));
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
            <?php } ?>
        </div>

        <div class="pagination">
            <?php if ($page > 1) { ?>
                <a href="?<?php echo build_team_filters_querystring(["page" => $page - 1]); ?>" class="pagination-link">&laquo; Précédent</a>
            <?php } ?>

            <?php for ($i = 1; $i <= $total_pages; $i++) { ?>
                <a href="?<?php echo build_team_filters_querystring(["page" => $i]); ?>" class="pagination-link <?php echo ($i === $page) ? 'pagination-active' : ''; ?>">
                    <?php echo $i; ?>
                </a>
            <?php } ?>

            <?php if ($page < $total_pages) { ?>
                <a href="?<?php echo build_team_filters_querystring(["page" => $page + 1]); ?>" class="pagination-link">Suivant &raquo;</a>
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