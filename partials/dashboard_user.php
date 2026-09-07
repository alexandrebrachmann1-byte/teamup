<?php
    require_once "../functions/posts.php";
    require_once "form_player_post.php";
    require_once "form_team_post.php";
    require_once "../functions/role_icons.php";

    $playerPosts = get_player_post_by_user_id($_SESSION["user_id"]);
?>

<div class="posts-grid">
    <?php foreach ($playerPosts as $playerPost) { ?>
        <div class="post-card">
            <a href="../pages/player_post_details.php?id=<?php echo $playerPost["id"]; ?>" class="post-card-link">
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

            <?php if ($playerPost["user_id"] === $_SESSION["user_id"]) { ?>
                <div class="post-card-actions">
                    <a href="../pages/player_post_edit.php?id=<?php echo $playerPost["id"]; ?>" class="btn-card btn-card-edit">Modifier</a>
                    <a href="../traitements/traitement_player_post_delete.php?id=<?php echo $playerPost["id"]; ?>" class="btn-card btn-card-delete">Supprimer</a>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</div>

<?php
    $teamPosts = get_team_post_by_user_id($_SESSION["user_id"]);
?>

<div class="posts-grid">
    <?php foreach ($teamPosts as $teamPost) { ?>
        <div class="post-card">
            <a href="team_post_details.php?id=<?php echo $teamPost["id"]; ?>" class="post-card-link">
                <h4 class="post-card-title"><?php echo $teamPost["name"]; ?></h4>

                <div class="post-card-row">
                    <span class="post-card-label">Rang</span>
                    <span class="post-card-value post-card-rank"><?php echo $teamPost["rank"]; ?></span>
                </div>
                <div class="post-card-row">
                    <span class="post-card-label">Rôle :</span>
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

            <?php if ($teamPost["user_id"] === $_SESSION["user_id"]) { ?>
                <div class="post-card-actions">
                    <a href="../pages/team_post_edit.php?id=<?php echo $teamPost["id"]; ?>" class="btn-card btn-card-edit">Modifier</a>
                    <a href="../traitements/traitement_team_post_delete.php?id=<?php echo $teamPost["id"]; ?>" class="btn-card btn-card-delete">Supprimer</a>
                </div>
            <?php } ?>
        </div>
    <?php } ?>
</div>

