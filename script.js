document.addEventListener("DOMContentLoaded", () => {
    // Sélectionnez la checkbox et le menu de navigation
    const checkbox = document.querySelector(".checkbox");
    const navlink = document.querySelector(".contain-b");
    
    // Ajoutez un écouteur d'événements à la checkbox
    checkbox.addEventListener("change", () => {
      // Vérifiez si la checkbox est cochée
      if (checkbox.checked) {
        // Si la checkbox est cochée, ajoutez la classe "MLM" au menu
        navlink.classList.add("MLM");

      } else {
        // Si la checkbox est décochée, enlevez la classe "MLM" du menu
        navlink.classList.remove("MLM");

      }
    });
  });

