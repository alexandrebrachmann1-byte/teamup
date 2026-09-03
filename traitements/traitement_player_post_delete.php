<?php
session_start();
require_once "../functions/posts.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: /teamup/pages/login.php");
    exit;
}

if (!isset($_GET["id"])) {
    header("Location: /teamup/pages/dashboard.php");
    exit;
}

$playerPost = get_player_post_by_id($_GET["id"]);
$playerPost = $playerPost[0];

if ($playerPost["user_id"] !== $_SESSION["user_id"]) {
    header("Location: /teamup/pages/dashboard.php");
}

delete_player_post($_GET["id"]);

header("Location: /teamup/pages/dashboard.php");
exit;
?>
