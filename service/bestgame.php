<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

require './koneksi.php';

// Ambil game dengan rating di bawah 8, maksimal 6 item
$sql = "SELECT * FROM games ORDER BY rating DESC LIMIT 6";

$result = $conn->query($sql);
$games = [];

while ($row = $result->fetch_assoc()) {
  $games[] = $row;
}

echo json_encode($games);
?>