<?php 
session_start();
require_once "../functions/database.php";
require_once "../functions/posts.php";

$playerPosts = get_all_players_posts();
var_dump($playerPosts);
?>

<div>
    <h4></h4>
</div>
