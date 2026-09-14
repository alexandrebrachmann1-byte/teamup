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

$user = get_user_by_id($_GET["id"]);
$user = $user[0];

delete_user_by_id($_GET["id"]);

header("Location: /teamup/pages/user_management.php");
exit;
?>