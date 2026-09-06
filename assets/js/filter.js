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

document.addEventListener("DOMContentLoaded", function () {

  // ==========================================================================
  // FILTRE DES ANNONCES JOUEURS (player_posts.php)
  // Ce bloc ne s'exécute que si les éléments correspondants sont sur la page.
  // ==========================================================================

  const rechercheInput = document.getElementById("rechercheInput");
  const filtreRole = document.getElementById("filtreRole");
  const filtreRang = document.getElementById("filtreRang");
  const filtreChampion = document.getElementById("filtreChampion");
  const triSelect = document.getElementById("triSelect");
  const grid = document.getElementById("postsGrid");

  if (rechercheInput && filtreRole && filtreRang && filtreChampion && triSelect && grid) {

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
  }


  // ==========================================================================
  // FILTRE DES ANNONCES ÉQUIPES (team_posts.php)
  // Même logique que le filtre joueurs, adaptée aux champs d'une équipe
  // (pas de champion, "name" à la place de "username").
  // ==========================================================================

  const rechercheInputTeam = document.getElementById("rechercheInputTeam");
  const filtreRoleTeam = document.getElementById("filtreRoleTeam");
  const filtreRangTeam = document.getElementById("filtreRangTeam");
  const triSelectTeam = document.getElementById("triSelectTeam");
  const gridTeam = document.getElementById("postsGrid");

  if (rechercheInputTeam && filtreRoleTeam && filtreRangTeam && triSelectTeam && gridTeam) {

    function apply_filter_and_sort_team() {
      const texteRecherche = rechercheInputTeam.value.toLowerCase();
      const roleChoisi = filtreRoleTeam.value.toLowerCase();
      const rangChoisi = filtreRangTeam.value.toLowerCase();
      const typeTri = triSelectTeam.value;

      let cartes = Array.from(gridTeam.querySelectorAll(".post-card"));

      // --- FILTRAGE ---
      cartes.forEach((carte) => {
        const nom = carte.dataset.name;
        const role = carte.dataset.role; // ex: "Top,Mid,Support"
        const rang = carte.dataset.rank;

        const correspondNom = nom.includes(texteRecherche);
        const correspondRole = roleChoisi === "" || role.includes(roleChoisi);
        const correspondRang = rangChoisi === "" || rang === rangChoisi;

        if (correspondNom && correspondRole && correspondRang) {
          carte.style.display = "";
        } else {
          carte.style.display = "none";
        }
      });

      // --- TRI (uniquement sur les cartes visibles) ---
      let cartesVisibles = cartes.filter((c) => c.style.display !== "none");

      if (typeTri === "nom-asc") {
        cartesVisibles.sort((a, b) =>
          a.dataset.name.localeCompare(b.dataset.name),
        );
      } else if (typeTri === "nom-desc") {
        cartesVisibles.sort((a, b) =>
          b.dataset.name.localeCompare(a.dataset.name),
        );
      } else if (typeTri === "rang") {
        cartesVisibles.sort(
          (a, b) =>
            ordreRangs.indexOf(a.dataset.rank) -
            ordreRangs.indexOf(b.dataset.rank),
        );
      }

      cartesVisibles.forEach((carte) => gridTeam.appendChild(carte));
    }

    rechercheInputTeam.addEventListener("input", apply_filter_and_sort_team);
    filtreRoleTeam.addEventListener("change", apply_filter_and_sort_team);
    filtreRangTeam.addEventListener("change", apply_filter_and_sort_team);
    triSelectTeam.addEventListener("change", apply_filter_and_sort_team);
  }

});