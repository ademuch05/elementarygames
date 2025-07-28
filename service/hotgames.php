<?php
header('Content-Type: application/json');
$conn = new mysqli("localhost", "root", "", "games_elementary", 3307);

$result = $conn->query("SELECT * FROM games ORDER BY rating DESC LIMIT 5");
$games = [];

while ($row = $result->fetch_assoc()) {
  $games[] = $row;
}

echo json_encode($games);
?>
