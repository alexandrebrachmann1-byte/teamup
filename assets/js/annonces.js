document.addEventListener("DOMContentLoaded", function () {
  const rechercheInput = document.getElementById("rechercheInput");
  const filtreRole = document.getElementById("filtreRole");
  const filtreRang = document.getElementById("filtreRang");
  const filtreChampion = document.getElementById("filtreChampion");
  const triSelect = document.getElementById("triSelect");
  const grid = document.getElementById("postsGrid");

  const ordreRangs = [
    "Fer",
    "Bronze",
    "Argent",
    "Or",
    "Platine",
    "Emeraude",
    "Diamant",
    "Master",
    "Grandmaster",
    "Challenger",
  ];

  function apply_filter_and_sort() {
    const texteRecherche = rechercheInput.value.toLowerCase();
    const roleChoisi = filtreRole.value.toLowerCase();
    const rangChoisi = filtreRang.value.toLowerCase();
    const championChoisi = filtreChampion.value.toLowerCase();
    const typeTri = triSelect.value;

    let cartes = Array.from(grid.querySelectorAll(".post-card"));

    // --- FILTRAGE ---
    cartes.forEach((carte) => {
      const username = carte.dataset.username;
      const role = carte.dataset.role; // ex: "Top,Jungle" ou "Top"
      const rang = carte.dataset.rank;
      const champion = carte.dataset.champion;

      const correspondNom = username.includes(texteRecherche);
      const correspondRole = roleChoisi === "" || role.includes(roleChoisi);
      const correspondRang = rangChoisi === "" || rang === rangChoisi;
      const correspondChampion = championChoisi === "" || champion.includes(championChoisi);

      if (correspondNom && correspondRole && correspondRang && correspondChampion) {
        carte.style.display = "";
      } else {
        carte.style.display = "none";
      }
    });

    // --- TRI (uniquement sur les cartes visibles) ---
    let cartesVisibles = cartes.filter((c) => c.style.display !== "none");

    if (typeTri === "nom-asc") {
      cartesVisibles.sort((a, b) =>
        a.dataset.username.localeCompare(b.dataset.username),
      );
    } else if (typeTri === "nom-desc") {
      cartesVisibles.sort((a, b) =>
        b.dataset.username.localeCompare(a.dataset.username),
      );
    } else if (typeTri === "rang") {
      cartesVisibles.sort(
        (a, b) =>
          ordreRangs.indexOf(a.dataset.rank) -
          ordreRangs.indexOf(b.dataset.rank),
      );
    }

    cartesVisibles.forEach((carte) => grid.appendChild(carte));
  }

  rechercheInput.addEventListener("input", apply_filter_and_sort);
  filtreRole.addEventListener("change", apply_filter_and_sort);
  filtreRang.addEventListener("change", apply_filter_and_sort);
  filtreChampion.addEventListener("change", apply_filter_and_sort);
  triSelect.addEventListener("change", apply_filter_and_sort);
});
