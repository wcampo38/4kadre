document.addEventListener("DOMContentLoaded", () => {
    const themeToggle = document.getElementById("theme-toggle");
    const themeIcon = document.getElementById("theme-icon");

    // Fonction pour mettre à jour l'icône
    const updateIcon = () => {
        if (document.documentElement.getAttribute("data-theme") === "dark") {
            themeIcon.className = "bi bi-moon-fill"; // Lune pour le mode sombre
        } else {
            themeIcon.className = "bi bi-sun-fill"; // Soleil pour le mode clair
        }
    };

    // Initialisation de l'icône au chargement de la page
    updateIcon();

    // Événement de clic pour changer le thème
    themeToggle.addEventListener("click", () => {
        if (document.documentElement.getAttribute("data-theme") === "dark") {
            document.documentElement.removeAttribute("data-theme");
            localStorage.setItem("theme", "light");
        } else {
            document.documentElement.setAttribute("data-theme", "dark");
            localStorage.setItem("theme", "dark");
        }
        updateIcon(); // Met à jour l'icône après le changement de thème
    });

    // Vérification du thème enregistré dans le localStorage
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme) {
        document.documentElement.setAttribute("data-theme", savedTheme);
        updateIcon();
    }
});
