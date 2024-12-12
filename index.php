<?php include 'includes/header.php'; ?>



<!-- Contenu principal -->
<div class="container py-5">
    <!-- Bloc des catégories -->
    <section id="categories" class="py-5">
        <div class="row text-center">
            <?php
            // Tableau des catégories
            $categories = [
                "cinema" => "Cinéma",
                "jeux-video" => "Jeux Vidéo",
                "socialmedia" => "Social Media",
                "photographie" => "Photographie",
                "musique" => "Musique"
            ];

            foreach ($categories as $slug => $name) {
                echo "
                <div class='col-md-2'>
                    <div class='p-3 border rounded bg-secondary'>
                        <a href='pages/{$slug}.php' class='text-white text-decoration-none'>{$name}</a>
                    </div>
                </div>";
            }
            ?>
        </div>
    </section>

    <!-- Section des derniers articles -->
    <section id="derniers-articles" class="py-5 text-center">
        <h2 class="mb-4">Derniers Articles</h2>
        <div class="row">
            <?php
            // Tableau d'articles pour simuler du contenu
            $articles = [
                ["image" => "images/article1.jpg", "title" => "Article 1", "author" => "Lorem ipsum", "date" => "20/10/2024"],
                ["image" => "images/article2.jpg", "title" => "Article 2", "author" => "Lorem ipsum", "date" => "20/10/2024"],
                ["image" => "images/article3.jpg", "title" => "Article 3", "author" => "Lorem ipsum", "date" => "20/10/2024"],
                ["image" => "images/article4.jpg", "title" => "Article 4", "author" => "Lorem ipsum", "date" => "20/10/2024"],
            ];

            foreach ($articles as $article) {
                echo "
                <div class='col-md-3'>
                    <div class='card border-0 shadow-sm'>
                        <img src='{$article["image"]}' class='card-img-top' alt='{$article["title"]}'>
                        <div class='card-body'>
                            <h5 class='card-title'>{$article["title"]}</h5>
                            <p class='card-text'>Écrit par {$article["author"]}<br>{$article["date"]}</p>
                            <a href='#' class='btn btn-primary'>Lire plus</a>
                        </div>
                    </div>
                </div>";
            }
            ?>
        </div>
    </section>

    <section id="suivez-nous" class="py-5 bg-light text-center">
    <h2 class="mb-4">Suivez Nous!</h2>
    <button class="btn btn-primary mb-4">Suivre +</button>
    <div id="instagramCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Conteneur des items -->
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="d-flex justify-content-center">
                    <img src="images/post1.jpg" class="d-block w-25 mx-2" alt="Post Instagram 1">
                    <img src="images/post2.jpg" class="d-block w-25 mx-2" alt="Post Instagram 2">
                    <img src="images/post3.jpg" class="d-block w-25 mx-2" alt="Post Instagram 3">
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="d-flex justify-content-center">
                    <img src="images/post4.jpg" class="d-block w-25 mx-2" alt="Post Instagram 4">
                    <img src="images/post5.jpg" class="d-block w-25 mx-2" alt="Post Instagram 5">
                    <img src="images/post6.jpg" class="d-block w-25 mx-2" alt="Post Instagram 6">
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
