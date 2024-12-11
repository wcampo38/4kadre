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
</div>

<script src="js/theme-toggle.js"></script>

<?php include 'includes/footer.php'; ?>
