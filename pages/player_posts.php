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
    <title>Chercher un joueur</title>
</head>
<body>
    
</body>
</html>





<?php 
require_once "../partials/header.php";
$playersPosts = get_all_players_posts();

foreach ($playersPosts as $playerPost) {
    ?> 
        <div>
            <h4> <?php echo $playerPost["riot_username"]; ?> </h4>
        </div>
        <div>
            <p> <?php echo $playerPost["role"]; ?> </p>
        </div>
        <div>
            <p> <?php echo $playerPost["rank"]; ?> </p>
        </div>
        <div>
            <p> <?php echo $playerPost["champion"]; ?> </p>
        </div>
        <div>
            <p> <?php echo $playerPost["description"]; ?> </p>
        </div>
        <div>
            <p> Discord : <?php echo $playerPost["discord"]; ?> </p>
        </div>
    <?php
}


