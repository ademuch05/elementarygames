<?php
header('Content-Type: application/json');
$conn = new mysqli("g934po.h.filess.io", "elementary_setsdollwe", "45d8e682462d32cd4746bcfdb2b852e356cc3e9e", "elementary_setsdollwe", 3307);

$result = $conn->query("SELECT * FROM games WHERE rating<4 ORDER BY rating DESC LIMIT 5");
$games = [];

while ($row = $result->fetch_assoc()) {
  $games[] = $row;
}

echo json_encode($games);
?>
