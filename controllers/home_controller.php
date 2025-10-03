<?php
// controllers/home_controller.php

// On a besoin du modèle pour récupérer les données
require_once 'models/article_model.php';

// Le contrôleur demande les articles au modèle
$articles = getLastThreeArticles($pdo);

// Une fois les données récupérées, le contrôleur appelle la vue pour les afficher
require_once 'views/home_view.php';
