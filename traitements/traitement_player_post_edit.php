<?php 
session_start();
require_once "../functions/database.php";
require_once "../functions/posts.php";

$playerPost = get_player_post_by_id($_GET["id"]);
$playerPost = $playerPost[0];

if(isset($_POST["ok"])){

    $username = $_POST["username"];
    $rank = $_POST["rank"];
    $role = implode(',', $_POST["role"]);
    $champion = implode(',', $_POST["champion"]);
    $description = $_POST["description"];
    $discord = $_POST["discord"];
    $id = $_GET["id"];


    $request = getpdo()->prepare("
    UPDATE player_posts 
    SET riot_username = :riot_username, 
        rank = :rank, 
        role = :role, 
        champion = :champion, 
        discord = :discord, 
        description = :description 
    WHERE id = :id AND user_id = :user_id
    ");
    
    $request->execute(
        array(
            "user_id" => $_SESSION["user_id"],
            "riot_username" => $username,
            "rank" => $rank,
            "role" => $role,
            "champion" => $champion,
            "description" => $description,
            "discord" => $discord,
            "id" => $id
        )
    ); 
    header("Location: /teamup/pages/dashboard.php");
}




