<?php
    require_once "../functions/posts.php";
    require_once "form_player_post.php";
    require_once "form_team_post.php";

    $playerPosts = get_player_post_by_user_id($_SESSION["user_id"]);
    
    foreach ($playerPosts as $playerPost) {
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
?>