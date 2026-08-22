<?php 
session_start();
require_once "../functions/database.php";
require_once "../functions/posts.php";

$teamsPosts = get_all_teams_posts();
var_dump($teamsPosts);