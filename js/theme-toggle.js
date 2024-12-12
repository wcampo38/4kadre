document.addEventListener("DOMContentLoaded", () => {
    const themeToggle = document.getElementById("theme-toggle");
    const themeIcon = document.createElement("i");
    themeToggle.appendChild(themeIcon);

    // Fonction pour appliquer le thème
    const applyTheme = (theme) => {
        document.documentElement.setAttribute("data-theme", theme);
        localStorage.setItem("theme", theme);

        // Mise à jour de l'icône
        themeIcon.className = theme === "dark" ? "bi bi-moon-fill" : "bi bi-sun-fill";
    };

    // Détecter le thème du système
    const detectSystemTheme = () => {
        return window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
    };

    // Récupérer le thème enregistré ou utiliser celui du système
    const savedTheme = localStorage.getItem("theme");
    const systemTheme = detectSystemTheme();
    const initialTheme = savedTheme || systemTheme;

    // Appliquer le thème initial
    applyTheme(initialTheme);

    // Basculer le thème lors du clic sur le bouton
    themeToggle.addEventListener("click", () => {
        const currentTheme = document.documentElement.getAttribute("data-theme");
        applyTheme(currentTheme === "dark" ? "light" : "dark");
    });

    // Écouter les changements de thème système
    window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", (event) => {
        if (!localStorage.getItem("theme")) {
            applyTheme(event.matches ? "dark" : "light");
        }
    });
});
