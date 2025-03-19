<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Monde de l'Audiovisuel</title>
    <!-- Inclure Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Inclure le CSS personnalisé -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>
    <!-- Header -->
    <header class=" text-center py-4 position-relative">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Logo -->
                <a href="index.php">
                    <img src="image/4Kadres_logo_v2.png" alt="4KADRE Logo" class="logo">
                </a>
                <!-- Menu -->
                <nav>
                    <ul class="nav">
                        <li class="nav-item"><a href="index.php" class="nav-link text-white">Homepage</a></li>
                        <li class="nav-item"><a href="pages/musique.php" class="nav-link text-white">Musique</a></li>
                        <li class="nav-item"><a href="pages/photographie.php" class="nav-link text-white">Photographie</a></li>
                        <li class="nav-item"><a href="pages/jeux-video.php" class="nav-link text-white">Jeux Vidéo</a></li>
                        <li class="nav-item"><a href="pages/reseaux-sociaux.php" class="nav-link text-white">Réseaux Sociaux</a></li>
                        <li class="nav-item"><a href="pages/cinema.php" class="nav-link text-white">Cinéma</a></li>
                        <button id="theme-toggle" class="btn btn-outline-primary ms-3"></button>

                    </ul>
                </nav>
            </div>
            <!-- Titre principal -->
            <h2 class="display-4 fw-bold mt-4">Le Monde de l'Audiovisuel</h2>
            <p class="lead mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <!-- Champ de recherche ou inscription -->
            <form method="POST" action="pages/newsletter.php" class="d-flex justify-content-center mt-3">
                <input type="email" name="email" class="form-control w-25" placeholder="Votre email" required>
                <button type="submit" class="btn btn-primary ms-2">S'abonner</button>


            </form>

        </div>
    </header>
    <?php if (isset($_GET['success'])): ?>
        <div id="notification" style="color: green;">Merci de vous être abonné à notre newsletter !</div>
    <?php elseif (isset($_GET['error'])): ?>
        <?php if ($_GET['error'] === 'exists'): ?>
            <div id="notification" style="color: orange;">Vous êtes déjà abonné à notre newsletter.</div>
        <?php elseif ($_GET['error'] === 'invalid_email'): ?>
            <div id="notification" style="color: red;">Veuillez entrer une adresse email valide.</div>
        <?php elseif ($_GET['error'] === 'database'): ?>
            <div id="notification" style="color: red;">Erreur lors de l'abonnement. Veuillez réessayer plus tard.</div>
        <?php endif; ?>
    <?php endif; ?>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const notification = document.getElementById("notification");
            if (notification) {
                setTimeout(() => {
                    notification.style.transition = "opacity 0.5s"; // Ajoute une transition douce
                    notification.style.opacity = "0"; // Rend le message invisible

                    // Supprime complètement le message après la transition
                    setTimeout(() => {
                        notification.remove();
                    }, 500); // Temps pour que l'animation se termine (0.5s)
                }, 5000); // Attend 5 secondes avant de démarrer l'animation
            }
        });
    </script>