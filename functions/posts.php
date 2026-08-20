<?php 
require_once "database.php";

function get_all_players_posts() {
    $pdo = getPDO();  
    $sql = "SELECT * FROM player_posts";
    $stmt = $pdo->query($sql);

  $playerPosts = $stmt->fetchAll(PDO::FETCH_ASSOC);

   
  return $playerPosts;
}