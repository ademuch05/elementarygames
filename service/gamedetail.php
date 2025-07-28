<?php
header('Content-Type: application/json');
include './koneksi.php'; // file koneksi ke database

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM games WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        echo json_encode($row);
    } else {
        echo json_encode(["error" => "Game not found"]);
    }
} else {
    echo json_encode(["error" => "No ID provided"]);
}
?>
