<?php
require_once "database.php";

function total_number_of_player_post() {
    $pdo = getPDO();  
    $sql = "SELECT COUNT(*) FROM player_posts";
    $stmt = $pdo->query($sql);

    return $stmt->fetchColumn();
}

function total_number_of_team_post() {
    $pdo = getPDO();  
    $sql = "SELECT COUNT(*) FROM team_posts";
    $stmt = $pdo->query($sql);

    return $stmt->fetchColumn();
}

function get_latest_player_posts($limit = 5) {
    $pdo = getPDO();

    $sql = "SELECT id, user_id, riot_username, rank, role, champion, discord, description, created_at
            FROM player_posts
            ORDER BY created_at DESC
            LIMIT :limit";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':limit', (int)$limit, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
