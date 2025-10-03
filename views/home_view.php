<?php
// views/home_view.php
// On inclut le header
include 'templates/header.php';
?>

<section class="news">
    <div class="container">
        <h2>L'ACTUALITÉ DU CLUB</h2>
        <div class="news-grid">

            <?php foreach ($articles as $article): ?>
                <article class="news-item">
                    <img src="public/<?php echo htmlspecialchars($article['image_url']); ?>" alt="Image de l'article">
                    <h3><?php echo htmlspecialchars($article['titre']); ?></h3>
                    <p><?php echo htmlspecialchars(substr($article['contenu'], 0, 100)); ?>...</p>
                    <a href="#">Lire la suite...</a>
                </article>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<?php
// On inclut le footer
include 'templates/footer.php';
?>