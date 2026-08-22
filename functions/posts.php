<?php 
require_once "database.php";

function get_all_players_posts() {
    $pdo = getPDO();  
    $sql = "SELECT * FROM player_posts";
    $stmt = $pdo->query($sql);

  $playersPosts = $stmt->fetchAll(PDO::FETCH_ASSOC);

   
  return $playersPosts;
}

function get_all_teams_posts() {
    $pdo = getPDO();  
    $sql = "SELECT * FROM team_posts";
    $stmt = $pdo->query($sql);

  $teamsPosts = $stmt->fetchAll(PDO::FETCH_ASSOC);

   
  return $teamsPosts;
}