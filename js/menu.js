document.addEventListener("DOMContentLoaded", () => {
  // Menú de perfil
  const profileBtn = document.querySelector(".profile-icon");
  const dropdown = document.getElementById("dropdown-menu");

  if (profileBtn) {
    profileBtn.addEventListener("click", (e) => {
      e.stopPropagation(); // Previene que se cierre inmediatamente
      dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
    });

    // Oculta el menú si se hace clic fuera
    document.addEventListener("click", () => {
      dropdown.style.display = "none";
    });
  }
});
  function toggleInfo(card) {
    card.classList.toggle("active");
  }