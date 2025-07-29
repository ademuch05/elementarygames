<?php
$conn = new mysqli("g934po.h.filess.io", "elementary_setsdollwe", "45d8e682462d32cd4746bcfdb2b852e356cc3e9e", "elementary_setsdollwe", 3307);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$id = $_GET['id'] ?? null;
if ($id) {
    // Ambil gambar dulu supaya bisa dihapus dari folder
    $query = $conn->query("SELECT image_url FROM games WHERE id = $id");
    $row = $query->fetch_assoc();
    $imagePath = "../" . $row['image_url'];

    // Hapus dari DB
    $conn->query("DELETE FROM games WHERE id = $id");

    // Hapus gambar dari folder
    if (file_exists($imagePath)) {
        unlink($imagePath);
    }
}

header("Location: ../pages/admin_game_list.php");
exit;
?>
