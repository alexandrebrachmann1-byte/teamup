<?php
session_start();
require_once "../functions/posts.php"
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
        var_dump($_GET);
        $playerPost = get_player_post_by_id($_GET["id"]);
        var_dump($playerPost);
        ?>







    </div>
</body>
</html>