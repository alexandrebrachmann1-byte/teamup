<?php 
session_start();
require_once "../functions/database.php";

if(isset($_POST["ok"])){

    $name = $_POST["name"];
    $rank = $_POST["rank"];
    $role = implode(',', $_POST["role"]);
    $description = $_POST["description"];
    $discord = $_POST["discord"];


    $request = getpdo()->prepare("INSERT INTO team_posts (user_id, name, rank, role, description, discord) VALUES (:user_id, :name, :rank, :role, :description, :discord)");
    $request->execute(
        array(
            "user_id" => $_SESSION["user_id"],
            "name" => $name,
            "rank" => $rank,
            "role" => $role,
            "description" => $description,
            "discord" => $discord
        )
    ); 
    header("Location: /teamup/pages/dashboard.php");
}




