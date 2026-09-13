<?php
require_once "../functions/database.php";

$results_per_page = 20;
$pdo = getPDO();


$search = isset($_GET["search"]) ? trim($_GET["search"]) : "";
$role   = isset($_GET["role"])   ? trim($_GET["role"])   : "";
$rank   = isset($_GET["rank"])   ? trim($_GET["rank"])   : "";
$sort   = isset($_GET["sort"])   ? trim($_GET["sort"])   : "defaut";


$where = [];
$params = [];

if ($search !== "") {
    $where[] = "name LIKE :search";
    $params[":search"] = "%$search%";
}
if ($role !== "") {
    $where[] = "role LIKE :role";
    $params[":role"] = "%$role%";
}
if ($rank !== "") {
    $where[] = "rank = :rank";
    $params[":rank"] = $rank;
}

$where_sql = count($where) > 0 ? "WHERE " . implode(" AND ", $where) : "";


$order_sql = "ORDER BY created_at DESC"; 

if ($sort === "nom-asc") {
    $order_sql = "ORDER BY name ASC";
} elseif ($sort === "nom-desc") {
    $order_sql = "ORDER BY name DESC";
} elseif ($sort === "rang") {
    $order_sql = "ORDER BY FIELD(rank, 'iron','bronze','silver','gold','platinum','emerald','diamond','master','grandmaster','challenger')";
}


$sql_count = "SELECT COUNT(id) as total FROM team_posts $where_sql";
$pstmt = $pdo->prepare($sql_count);
$pstmt->execute($params);
$total_results = $pstmt->fetch(PDO::FETCH_ASSOC)["total"];

$total_pages = max(1, ceil($total_results / $results_per_page));

$page = isset($_GET["page"]) ? (int) $_GET["page"] : 1;
$page = max(1, min($page, $total_pages));

$start_from = ($page - 1) * $results_per_page;


$sql = "SELECT * FROM team_posts $where_sql $order_sql LIMIT :start_from, :results_per_page";
$pstmt = $pdo->prepare($sql);

foreach ($params as $key => $value) {
    $pstmt->bindValue($key, $value);
}
$pstmt->bindValue(":start_from", $start_from, PDO::PARAM_INT);
$pstmt->bindValue(":results_per_page", $results_per_page, PDO::PARAM_INT);
$pstmt->execute();
$team_posts = $pstmt->fetchAll(PDO::FETCH_ASSOC);


function build_team_filters_querystring($extra = []) {
    $params = [
        "search" => $_GET["search"] ?? "",
        "role"   => $_GET["role"]   ?? "",
        "rank"   => $_GET["rank"]   ?? "",
        "sort"   => $_GET["sort"]   ?? "",
    ];
    $params = array_merge($params, $extra);
    $params = array_filter($params, function($v) {
        return $v !== "";
    });
    return http_build_query($params);
}
?>