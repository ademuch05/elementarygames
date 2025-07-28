const urlParams = new URLSearchParams(window.location.search);
const gameId = urlParams.get("id");

fetch(`../service/gamedetail.php?id=${gameId}`)
  .then((res) => res.json())
  .then((game) => {
    if (game.error) throw new Error(game.error);

    const container = document.getElementById("desc-contain");

    const genre = game.genre || "-";
    const features = game.features || "-"; // opsional, kalau punya
    const platforms = game.platform || "-"; // misal disimpan di kolom `platform`
    const image = game.image_url ? `../${game.image_url}` : "../img_game/default.jpg";
    const rating = game.rating || "-";
    const release = game.release_date || "-";
    const description = game.description || "-";

    container.innerHTML = `
      <div id="game-title" class="game-title text-center mt-6">${game.title}</div>

      <div class="game-image mb-4">
        <img src="${image}" alt="Game Image" />
      </div>

      <div class="row">
        <div class="col-md-4 mb-3">
          <div class="card p-3 mb-3">
            <p><b>Name:</b> ${game.title}</p>
            <p><b>Rating:</b> ${rating}</p>
            <p><b>Released:</b> ${release}</p>
            <p><b>Genres:</b> ${genre}</p>
            <p><b>Features:</b> ${features}</p>
            <p><b>Platforms:</b> ${platforms}</p>
          </div>
        </div>

        <div class="col-md-8">
          <div class="card p-4">
            <p class="fs-5 fw-semibold">Description</p>
            <p>${description}</p>
          </div>
        </div>
      </div>
    `;

    const loaderWrapper = document.getElementById("loader-wrapper");
    loaderWrapper.classList.add("fade-out");
    setTimeout(() => {
      loaderWrapper.classList.add("d-none");
      document.getElementById("content").classList.remove("d-none");
    }, 500);
  })
  .catch((error) => {
    console.error("Terjadi kesalahan: ", error);
  });
