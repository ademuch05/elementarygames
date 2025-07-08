const API_KEY = "aa188895826b49c99a0d073e4bbb814e";

function searchGame() {
  const query = document.getElementById("search-input").value.trim();
  const resultContainer = document.getElementById("result-container");
  resultContainer.innerHTML = "";

  if (!query) {
    alert("Please input name of game");
    return;
  }

  fetch(`https://api.rawg.io/api/games?key=${API_KEY}&search=${encodeURIComponent(query)}`)
    .then((res) => res.json())
    .then((data) => {
      if (data.results.length === 0) {
        resultContainer.innerHTML = "<p>Game not found</p>";
      }

      data.results.forEach((game) => {
        const card = document.createElement("div");
        const gameGenre = game.genres.slice(0, 1).map((genre) => genre.name);
        card.classList = "hg-card col pb-3";

        card.innerHTML = `
           <a href="deskripsi.html?id=${game.id}">
            <img src="${game.background_image}" alt=${game.name} class="w-100 object-fit-cover rounded-3" alt="" style="aspect-ratio:3/2"/>
            <div class="mx-2">
              <p class="sm-text mt-3 fs-7 mb-0">${gameGenre}</p>
              <p class="fw-semibold mt-1">${game.name}</p>
            </div>
          </a>
        `;
        resultContainer.appendChild(card);
      });
    })
    .catch((error) => {
      console.error("Terjadi kesalahan: ", error);
      resultContainer.innerHTML = "<p>Gagal memuat hasil</p>";
    });
}

const searchForm = document.getElementById("search-form");
searchForm.addEventListener("submit", function (e) {
  e.preventDefault();
  searchGame();
});
