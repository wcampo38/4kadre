<?php include 'includes/header.php'; ?>
<div class="container">
    <div class="row align-items-center">
        <div class="row text-center">
            
                <a href="pages/cinema.php" class="footer-card bg-cinema text-decoration-none text-white position-relative">
                    <img src="image/mascotte-cinema.png" alt="Mascotte Cinéma" class="mascotte-icon">
                    <span class="text-bottom-left">Cinéma</span>
                </a>
                <a href="pages/reseaux-sociaux.php" class="footer-card bg-social text-decoration-none text-white position-relative">
                    <img src="image/mascotte-reseau.png" alt="Mascotte Réseaux Sociaux" class="mascotte-icon">
                    <span class="text-bottom-left">Réseaux Sociaux</span>
                </a>
                <a href="pages/jeux-video.php" class="footer-card bg-jeux-video text-decoration-none text-white position-relative">
                    <img src="image/mascotte-jeux.png" alt="Mascotte Jeux Vidéo" class="mascotte-icon">
                    <span class="text-bottom-left">Jeux Vidéo</span>
                </a>
            
                <a href="pages/photographie.php" class="footer-card bg-photographie text-decoration-none text-white position-relative">
                    <img src="image/mascotte-photo.png" alt="Mascotte Photographie" class="mascotte-icon">
                    <span class="text-bottom-left">Photographie</span>
                </a>
  
                <a href="pages/musique.php" class="footer-card bg-musique text-decoration-none text-white position-relative">
                    <img src="image/mascotte-music.png" alt="Mascotte Musique" class="mascotte-icon">
                    <span class="text-bottom-left">Musique</span>
                </a>
            
        </div>
    </div>
</div>

<style>
    .text-bottom-left {
        position: absolute;
        bottom: 10px; /* Ajustez la valeur selon vos besoins */
        left: 10px; /* Ajustez la valeur selon vos besoins */
        font-size: 1rem; /* Taille du texte */
        color: white; /* Couleur du texte */
    }
</style>

<!-- Section "Qui on est ?" -->
<section id="qui-on-est" class="py-5 position-relative overflow-hidden">
    <div class="cross-band horizontal"></div>
    <div class="cross-band vertical"></div>
    <div class="container text-center position-relative">
        <h2 class="mb-4">Qui on est ?</h2>
        <div class="video-container">
            <video controls class="centered-video">
                <source  type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</section>


<!-- Section des Derniers Articles -->
<section id="derniers-articles" class="py-5 text-center">
    <h2 class="mb-4">Derniers Articles</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card border-0 shadow-sm">
                    <img  class="card-img-top" alt="Article 1">
                    <div class="card-body">
                        <h5 class="card-title">Lorem ipsum</h5>
                        <p class="card-text">Écrit par Lorem ipsum<br>20/10/2024</p>
                        <a href="#" class="btn btn-primary">Lire plus</a>
                    </div>

                </div>
            </div>
            <!-- Répéter pour les autres articles -->
        </div>
    </div>
</section>


    <section id="suivez-nous" class="py-5 text-center">
    <h2 class="mb-4">Suivez Nous!</h2>
    <button class="btn btn-primary mb-4">Suivre +</button>
    <div id="instagramCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Conteneur des items -->
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="d-flex justify-content-center">
                    <img  class="d-block w-25 mx-2" alt="Post Instagram 1">
                    <img  class="d-block w-25 mx-2" alt="Post Instagram 2">
                    <img  class="d-block w-25 mx-2" alt="Post Instagram 3">
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <img  class="d-block w-25 mx-2" alt="Post Instagram 4">
                    <img  class="d-block w-25 mx-2" alt="Post Instagram 5">
                    <img  class="d-block w-25 mx-2" alt="Post Instagram 6">
                </div>
            </div>
        </div>
        <!-- Flèches de navigation -->
        <button class="carousel-control-prev" type="button" data-bs-target="#instagramCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#instagramCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>
</section>


</div>

<script src="js/theme-toggle.js"></script>

<?php include 'includes/footer.php'; ?>
