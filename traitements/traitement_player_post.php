<?php 
session_start();
require_once "../functions/database.php";

if(isset($_POST["ok"])){

    $username = $_POST["username"];
    $rank = $_POST["rank"];
    $role = implode(',', $_POST["role"]);
    $champion = implode(',', $_POST["champion"]);
    $description = $_POST["description"];
    $discord = $_POST["discord"];


    $request = getpdo()->prepare("INSERT INTO player_posts (user_id, riot_username, rank, role, champion, discord, description) VALUES (:user_id, :riot_username, :rank, :role, :champion, :discord, :description)");
    $request->execute(
        array(
            "user_id" => $_SESSION["user_id"],
            "riot_username" => $username,
            "rank" => $rank,
            "role" => $role,
            "champion" => $champion,
            "description" => $description,
            "discord" => $discord
        )
    ); 
    header("Location: /teamup/pages/dashboard.php");
}




