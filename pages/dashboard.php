<?php session_start();
var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <?php

    require_once "../partials/header.php";
        

    if($_SESSION["role"] === "user"){
        require_once "../partials/dashboard_user.php";
    }
    else{
        //header("Location: /teamup/pages/logout.php");
        echo "mauvais role";
    }
        

    ?>

</body>
</html>