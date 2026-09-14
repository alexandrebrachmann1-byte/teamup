<?php
session_start();
require_once "../functions/users.php";

$users = get_all_users();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des utilisateurs</title>
</head>
<body>
    <?php if($_SESSION["role"] !== "admin"){
        header("Location: ../index.php");
    } ?>
</body>
</html>