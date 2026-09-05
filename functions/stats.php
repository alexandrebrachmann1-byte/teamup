<?php
require_once "database.php";

function total_number_of_player_post() {
    $pdo = getPDO();  
    $sql = "SELECT COUNT(*) FROM player_posts";
    $stmt = $pdo->query($sql);

    return $stmt->fetchColumn();
}