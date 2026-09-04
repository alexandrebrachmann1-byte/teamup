<?php 
session_start();
require_once "../functions/database.php";
require_once "../functions/posts.php";

$teamPost = get_team_post_by_id($_GET["id"]);
$teamPost = $teamPost[0];

if(isset($_POST["ok"])){

    $name = $_POST["name"];
    $rank = $_POST["rank"];
    $role = implode(',', $_POST["role"]);
    $description = $_POST["description"];
    $discord = $_POST["discord"];
    $id = $_GET["id"];


    $request = getpdo()->prepare("
    UPDATE team_posts 
    SET name = :name, 
        rank = :rank, 
        role = :role,  
        description = :description,
        discord = :discord
    WHERE id = :id AND user_id = :user_id
    ");
    
    $request->execute(
        array(
            "user_id" => $_SESSION["user_id"],
            "name" => $name,
            "rank" => $rank,
            "role" => $role,
            "description" => $description,
            "discord" => $discord,
            "id" => $id
        )
    ); 
    header("Location: /teamup/pages/dashboard.php");
}




