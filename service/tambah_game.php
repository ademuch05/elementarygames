<?php
// $host = 'localhost';
// $user = 'root';
// $pass = '';
// $db = 'games_elementary';
// $port = 3306;
$host = 'g934po.h.filess.io';
$user = 'elementary_setsdollwe';
$pass = '45d8e682462d32cd4746bcfdb2b852e356cc3e9e';
$db = 'elementary_setsdollwe';
$port = 3307;

$conn = new mysqli($host, $user, $pass, $db, $port);
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data form
$title = $_POST['title'];
$genre = $_POST['genre'];
$rating = $_POST['rating'];
$release_date = $_POST['release_date'];
$description = $_POST['description'];
$features = $_POST['features'];
$platform = $_POST['platform'];


// Upload gambar
$uploadDir = '../img_game/'; // Path untuk menyimpan file (fisik)
$imageName = basename($_FILES['image']['name']);

$targetPath = $uploadDir . $imageName; // Ini untuk move_uploaded_file

$imagePath = 'img_game/' . $imageName;  // Ini untuk disimpan di database (dan ditampilkan)

if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
  $sql = "INSERT INTO games  (title, genre, rating, release_date, image_url, description, features, platform)
          VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

  $stmt = $conn->prepare($sql);
if (!$stmt) {
  die("Gagal prepare: " . $conn->error);
}

if (!$stmt->bind_param("ssdsssss", $title, $genre, $rating, $release_date, $imagePath, $description, $features, $platform)) {
  die("Gagal bind_param: " . $stmt->error);
}

if (!$stmt->execute()) {
  die("Gagal execute: " . $stmt->error);
}

  header("Location: ../index.php");
  exit;
} else {
  echo "Gagal upload gambar.";
}
?>