<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - Tambah Game</title>
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
    h2 {
      padding-top: 5rem;
      margin-bottom: 1rem;
    }
    form {
      width: 500px;
      background: white;
      padding: 1.5rem;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    label {
      color: #111;
      display: block;
      margin-top: 1rem;
      font-weight: 400;
    }
    input, textarea {
      color: #111;
    }
    input, textarea, button {
      width: 100%;
      padding: 0.6rem;
      margin-top: 0.3rem;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      background-color: #4CAF50;
      color: white;
      font-weight: bold;
      border: none;
      cursor: pointer;
      margin-top: 1.5rem;
    }
    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body class="">
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

  
  <section class="container d-flex flex-column align-items-center">
    <h2 class="text-light fs-4 fw-semibold">Tambah Game Baru</h2>

    <form action="../service/tambah_game.php" method="POST" enctype="multipart/form-data" class="">
      <label for="title">Judul Game</label>
      <input type="text" id="title" name="title" placeholder="Contoh: Cyberpunk 2077" required>

      <label for="genre">Genre</label>
      <input type="text" id="genre" name="genre" placeholder="Contoh: Action" required>

      <label for="rating">Rating (0.0 - 5.0)</label>
      <input type="number" id="rating" name="rating" step="0.1" min="0" max="5" placeholder="Contoh: 4.1">

      <label for="release_date">Tanggal Rilis</label>
      <input type="date" id="release_date" name="release_date">

      <label for="image">Upload Gambar</label>
      <input type="file" id="image" name="image" accept="image/*">

      <label for="description">Deskripsi</label>
      <textarea id="description" name="description" rows="4" placeholder="Deskripsi singkat tentang game..."></textarea>

      <!-- Tambahan Fitur -->
      <label for="features">Fitur Game</label>
      <input type="text" id="features" name="features" placeholder="Contoh: Multiplayer, Sci-fi, Sandbox">

      <!-- Tambahan Platform -->
      <label for="platform">Platform</label>
      <input type="text" id="platform" name="platform" placeholder="Contoh: PlayStation 4, Xbox One, iOS">

      <button class="btn btn-primary" type="submit">Tambah Game</button>
    </form>
  </section>

</body>
</html>
