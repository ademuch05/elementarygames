const API_KEY = "aa188895826b49c99a0d073e4bbb814e";

fetch("http://localhost/elementarygames/service/hotgames.php")
  .then((res) => res.json())
  .then((data) => {
    data.forEach((game) => {
      const card = document.createElement("div");
      card.classList = "col pb-3";
      card.innerHTML = `
        <a href="./pages/description.php?id=${game.id}">
          <img src="${game.image_url}" alt="${game.title}" class="w-100 object-fit-cover rounded-3" style="aspect-ratio:4/5"/>
          <div class="mx-2">
            <p class="sm-text mt-3 fs-7 mb-0">${game.genre}</p>
            <p class="fw-semibold mt-1">${game.title}</p>
          </div>
        </a>
      `;
      document.getElementById("hg-container").appendChild(card);
    });
  });

fetch("http://localhost/elementarygames/service/bestgame.php")
  .then((res) => res.json())
  .then((data) => {
    data.forEach((game) => {
      const card = document.createElement("div");
      card.classList = "hg-card col pb-4";
      const description = game.description ? game.description.slice(0, 150) + "..." : "No description";
      card.innerHTML = `
        <a href="./pages/description.php?id=${game.id}">
          <img src="${game.image_url}" alt="${game.title}" class="w-100 object-fit-cover rounded-3" style="aspect-ratio:3/2"/>
          <div class="mx-2">
            <p class="fw-semibold mt-3 mb-0">${game.title}</p>
            <p class="sm-text mt-1 fs-7">${description}</p>
          </div>
        </a>
      `;
      document.getElementById("mc-container").appendChild(card);
    });
  });

//   PLATFORM
fetch(`https://api.rawg.io/api/platforms?key=${API_KEY}&page_size=8`)
  .then((response) => response.json())
  .then((data) => {
    const pgContainer = document.getElementById("pg-container");

    data.results.forEach((platform) => {
      const card = document.createElement("div");
      card.classList = "hg-card col pb-3";

      card.innerHTML = `
           <a href="./pages/platform.php?idpl=${platform.id}">
            <img src="img/platforms/${platform.slug}.png" alt=${platform.name} class="w-100 object-fit-cover rounded-3" alt="" style="aspect-ratio:1/1"/>
            <div class="mx-2">
            <p class="fw-semibold mt-3 mb-0">${platform.name}
          </a>
        `;
      pgContainer.appendChild(card);
    });
    document.getElementById("loader").classList.add("d-none");
    document.getElementById("content").classList.remove("d-none");
  })
  .catch((error) => {
    console.error("Terjadi kesalahan: ", error);
  });

const loaderWrapper = document.getElementById("loader-wrapper");
loaderWrapper.classList.add("fade-out");
setTimeout(() => {
  loaderWrapper.classList.add("d-none");
  document.getElementById("content").classList.remove("d-none");
}, 500);
