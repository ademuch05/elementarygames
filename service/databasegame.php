<?php
//buat manggil hotgames sama bestgames
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

require './koneksi.php';

$type = $_GET['type'] ?? 'all';

if ($type === 'hot') {
    $sql = "SELECT * FROM games ORDER BY rating DESC LIMIT 5";
} else if ($type === 'best') {
    $sql = "SELECT * FROM games ORDER BY rating DESC LIMIT 100 OFFSET 5";
} else {
    $sql = "SELECT * FROM games";
}

$result = $conn->query($sql);
$games = [];

while ($row = $result->fetch_assoc()) {
    $games[] = $row;
}

echo json_encode($games);
?>