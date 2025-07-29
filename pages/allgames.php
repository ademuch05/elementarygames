<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="Elementary Games" />
    <meta property="og:description" content="Website that displays a list of games on various platforms" />
    <meta property="og:image" content="https://namadomain.com/img/hero.png" />
    <link rel="icon" href="../img/logo.png" type="image/png" />

    <title>List Game Platform</title>
    <!-- BOOTSTRAP -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr"
      crossorigin="anonymous"
    />
    <!-- CSS -->
    <link rel="stylesheet" href="../style/style.css" />
    <script type="module" src="../backend/scripts_backend/index_backend.js" defer></script>
    <style>
      .card {
        background-color: #090a1a;
        border: none;
      }
      .ratio-img {
        width: 100%;
        aspect-ratio: 3 / 2;
        object-fit: cover;
        display: block;
      }

      .game-title {
        font-weight: 600;
        margin-top: 0.25rem;
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

    <div id="content" class="d-flex flex-column d-none" style="min-height: 100vh">
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

      <section class="container hot-games mt-6 flex-fill">
        <h2 class="fs-4 fw-semibold">All Games</h2>
        <div id="hg-container" class="row row-cols-2 row-cols-sm-3 row-cols-lg-5 mt-4"></div>
      </section>

    </div>

      <!-- FOOTER -->
      <footer class="w-100 py-4 d-flex justify-content-center mt-5">
        <p>Copyright © 2024 Elementary.</p>
      </footer>
    </div>

    <!-- BOOTSTRAP SCRIPT -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
      crossorigin="anonymous"
    ></script>
    <!-- JS -->
     <script>
        fetch("http://localhost/elementarygames/service/allgame_be.php")
  .then(res => res.json())
  .then(data => {
    data.forEach(game => {
      const card = document.createElement("div");
      card.classList = "col pb-3";
      card.innerHTML = `
        <a href="../pages/description.php?id=${game.id}">
          <img src="/elementarygames/${game.image_url}" alt="${game.title}" class="w-100 object-fit-cover rounded-3" style="aspect-ratio:4/5"/>
          <div class="mx-2">
            <p class="sm-text mt-3 fs-7 mb-0">${game.genre}</p>
            <p class="fw-semibold mt-1">${game.title}</p>
          </div>
        </a>
      `;
      document.getElementById("hg-container").appendChild(card);
    });
  });

      </script>
    <script src="../script/platform.js"></script>
  </body>
</html>
