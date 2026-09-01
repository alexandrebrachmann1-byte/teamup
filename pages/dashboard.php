<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/teamup/assets/css/style.css">
</head>
<body>
    <?php
    if (isset($_SESSION["role"]) && $_SESSION["role"] !== "") {
        require_once "../partials/header.php";
    ?>
    <div class="page-content">
        <?php
        if ($_SESSION["role"] === "user") {
            require_once "../partials/dashboard_user.php";
        } else {
            echo "mauvais role";
        }
        ?>

































    </div>
    <?php
    } else {
        header("Location: /teamup/pages/login.php");
    }
    ?>
</body>
</html>