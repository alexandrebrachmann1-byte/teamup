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

    $teamPosts = get_team_post_by_user_id($_SESSION["user_id"]);

    foreach ($teamPosts as $teamPost) {
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
?>