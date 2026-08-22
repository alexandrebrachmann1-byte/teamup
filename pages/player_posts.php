<?php 
session_start();
require_once "../functions/database.php";
require_once "../functions/posts.php";

$playersPosts = get_all_players_posts();
var_dump($playersPosts);

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


