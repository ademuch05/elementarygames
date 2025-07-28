<?php
header('Content-Type: application/json');
include './koneksi.php';

$query = "SELECT id, title, genre, image_url FROM games ORDER BY id DESC"; // tampilkan semua game
$result = mysqli_query($conn, $query);

$games = [];

while ($row = mysqli_fetch_assoc($result)) {
    // Handle gambar kosong
    if (empty($row['image_url'])) {
        $row['image_url'] = '../img_game/default.jpg';
    }
    $games[] = $row;
}

echo json_encode($games);
?>
