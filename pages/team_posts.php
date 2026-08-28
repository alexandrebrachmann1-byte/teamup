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
</head>
<body>
    
</body>
</html>





<?php 
require_once "../partials/header.php";
$teamsPosts = get_all_teams_posts();

foreach ($teamsPosts as $teamPost) {
    ?> 
        <div>
            <h4> <?php echo $teamPost["name"]; ?> </h4>
        </div>
        <div>
            <p> <?php echo $teamPost["rank"]; ?> </p>
        </div>
        <div>
            <p> Rôle(s) recherché(s) : <?php echo $teamPost["role"]; ?> </p>
        </div>
        <div>
            <p> <?php echo $teamPost["description"]; ?> </p>
        </div>
        <div>
            <p> Discord : <?php echo $teamPost["discord"]; ?> </p>
        </div>
    <?php
}


