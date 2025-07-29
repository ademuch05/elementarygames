<?php
$conn = new mysqli("g934po.h.filess.io", "elementary_setsdollwe", "45d8e682462d32cd4746bcfdb2b852e356cc3e9e", "elementary_setsdollwe", 3307);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM games");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Game</title>
  <!-- BOOTSTRAP -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr"
      crossorigin="anonymous"
    />
    <!-- CSS -->
    <link rel="stylesheet" href="../style/style.css" />
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 2rem;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 0.75rem;
      text-align: left;
    }
  </style>
</head>
<body>
  <!-- NAVBAR -->
      <nav class="position-fixed w-100 navbar py-3">
        <div class="container">
          <div>
            <img class="logo" src="../img/logo.png" alt="" />
            <a class="fw-bold fs-5" href="../index.php">Elementary</a>
          </div>
          <div class="">
            <a href="../index.php" class="d-none d-sm-inline btn btn-primary btn-sm px-4">Home</a>
            <a href="./search.html" class="btn btn-light btn-sm px-3 ms-2">Search</a>
            <!-- BELUM LOGIN -->
            <a href="./login.html" class="btn btn-primary btn-sm px-4 ms-2 fw-light" id="login">Login</a>
            <!-- SUDAH LOGIN -->
            <div class="ms-2 btn-group d-none" id="profile">
              <button type="button" class="btn btn-primary btn-sm px-4 fw-light rounded-1" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">Profile</button>
              <ul class="dropdown-menu dropdown-menu-end" style="width: 250px">
                <li class="dropdown-item d-flex align-items-center gap-2 py-3" style="max-width: 100%">
                  <div class="rounded-circle overflow-hidden" style="width: 40px; height: 40px; background-color: aqua; flex-shrink: 0">
                    <img src="../img/hot-game.png" class="w-100 h-100 object-fit-cover" alt="avatar" />
                  </div>

                  <div class="flex-grow-1" style="max-width: 200px; word-break: break-word; overflow-wrap: break-word">
                    <p class="text-dark sm-text mb-0" style="margin: 0; word-break: break-word; white-space: normal">ade.10124433@mahasiswa.unikom.ac.id</p>
                  </div>
                </li>
                <!-- <li><a class="dropdown-item py-1" href="#">Bookmark</a></li> -->
                <li><a class="dropdown-item py-1 text-danger" href="#" id="logout">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

  <section class="container">
    <h2 class="fw-semibold fs-4" style="padding-top:6rem;">Daftar Game</h2>

    <table>
      <thead>
        <tr>
          <th>Title</th>
          <th>Genre</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?= htmlspecialchars($row['title']) ?></td>
            <td><?= htmlspecialchars($row['genre']) ?></td>
            <td><img src="../<?= $row['image_url'] ?>" width="100"></td>
            <td>
              <a href="../service/hapus_game.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus game ini?')">Hapus</a>
            </td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>

  </section>
  

</body>
</html>
