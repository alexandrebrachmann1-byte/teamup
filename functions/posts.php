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

function get_player_post_by_user_id($user_id) {
    $pdo = getPDO();  
    $sql = "SELECT p.id, p.user_id, p.riot_username, p.rank, p.role, p.champion, p.discord, p.description, p.created_at FROM player_posts as p INNER JOIN users AS u ON u.id = p.user_id WHERE u.id = :id";
    $pstmt = $pdo->prepare($sql);
    $pstmt->execute(["id" => $user_id]);

  $playerPost = $pstmt->fetchAll(PDO::FETCH_ASSOC);

   
  return $playerPost;
}

function get_team_post_by_user_id($user_id) {
    $pdo = getPDO();  
    $sql = "SELECT t.id, t.user_id, t.name, t.rank, t.role, t.description, t.discord, t.created_at FROM team_posts as t INNER JOIN users AS u ON u.id = t.user_id WHERE u.id = :id";
    $pstmt = $pdo->prepare($sql);
    $pstmt->execute(["id" => $user_id]);
    
  $teamPost = $pstmt->fetchAll(PDO::FETCH_ASSOC);

   
  return $teamPost;
}