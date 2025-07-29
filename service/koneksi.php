
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
  die(json_encode(['error' => 'Koneksi gagal']));
}
?>
