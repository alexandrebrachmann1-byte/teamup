<?php
session_start();

if (!isset($_SESSION["role"]) || $_SESSION["role"] !== "admin") {
    header("Location: ../index.php");
    exit;
}

require_once "../functions/users.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: /teamup/pages/login.php");
    exit;
}

if (!isset($_GET["id"])) {
    header("Location: /teamup/pages/dashboard.php");
    exit;
}

$teamPost = get_team_post_by_id($_GET["id"]);
$teamPost = $teamPost[0];

if ($teamPost["user_id"] !== $_SESSION["user_id"]) {
    header("Location: /teamup/pages/dashboard.php");
}

delete_team_post($_GET["id"]);

header("Location: /teamup/pages/dashboard.php");
exit;
?>