<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="Elementary Games" />
    <meta property="og:description" content="Website that displays a list of games on various platforms" />
    <meta property="og:image" content="https://namadomain.com/img/hero.png" />
    <link rel="icon" href="../img/logo.png" type="image/png" />

    <title>Fortnite: Blitz Royale</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../style/style.css" />
    <script type="module" src="../backend/scripts_backend/index_backend.js" defer></script>
    <script type="module" src="./backend/scripts_backend/index_backend.js" defer></script>
    <style>
      .game-image img {
        width: 100%;
        border-radius: 12px;
        aspect-ratio: 2/1;
        object-fit: cover;
      }
      .card {
        background-color: #1e293b;
        border: none;
      }
      .game-title {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 20px;
      }
    </style>
  </head>
  <body class="d-flex flex-column" style="min-height: 100vh">
    <!-- Loader -->
    <div id="loader-wrapper" class="position-fixed top-0 start-0 w-100 h-100 d-flex justify-content-center align-items-center" style="background-color: #090a1a; z-index: 100">
      <div id="loader" class="spinner-grow text-light" role="status" style="width: 50px; height: 50px">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

    <div id="content" class="d-none">
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

      <!-- Main Content -->
      <div id="desc-contain" class="container pt-5 flex-fill"></div>

      <!-- FOOTER -->
      <footer class="w-100 py-4 d-flex justify-content-center mt-5">
        <p>Copyright © 2024 Elementary.</p>
      </footer>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../script/description.js"></script>
  </body>
</html>
