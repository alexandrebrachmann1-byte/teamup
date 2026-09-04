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

function get_player_post_by_user_id($userId) {
    $pdo = getPDO();

    $stmt = $pdo->prepare('SELECT * FROM player_posts WHERE user_id = :user_id ORDER BY created_at DESC');
    $stmt->execute(['user_id' => $userId]);

    return $stmt->fetchAll();
}

function get_team_post_by_user_id($user_id) {
    $pdo = getPDO();  
    $sql = "SELECT t.id, t.user_id, t.name, t.rank, t.role, t.description, t.discord, t.created_at FROM team_posts as t WHERE t.user_id = :id";
    $pstmt = $pdo->prepare($sql);
    $pstmt->execute(["id" => $user_id]);
    
  $teamPost = $pstmt->fetchAll(PDO::FETCH_ASSOC);

   
  return $teamPost;
}

function get_player_post_by_id($id) {
    $pdo = getPDO();  
    $sql = "SELECT p.id, p.user_id, p.riot_username, p.rank, p.role, p.champion, p.discord, p.description, p.created_at FROM player_posts as p WHERE p.id = :id";
    $pstmt = $pdo->prepare($sql);
    $pstmt->execute(["id" => $id]);
    
  $playerPost = $pstmt->fetchAll(PDO::FETCH_ASSOC);

   
  return $playerPost;
}

function get_team_post_by_id($id) {
    $pdo = getPDO();  
    $sql = "SELECT t.id, t.user_id, t.name, t.rank, t.role, t.description, t.discord, t.created_at FROM team_posts as t WHERE t.id = :id";
    $pstmt = $pdo->prepare($sql);
    $pstmt->execute(["id" => $id]);
    
  $teamPost = $pstmt->fetchAll(PDO::FETCH_ASSOC);

   
  return $teamPost;
}

function delete_player_post($id) {
    $pdo = getPDO();  
    $sql = "DELETE FROM player_posts WHERE id = :id";
    $pstmt = $pdo->prepare($sql);
    $pstmt->execute(["id" => $id]);
    
}