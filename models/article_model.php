<?php
// models/article_model.php

function getLastThreeArticles(PDO $pdo)
{
    // La requête SQL est la seule responsabilité du modèle
    $sql = "SELECT * FROM articles ORDER BY date_publication DESC LIMIT 3";

    $query = $pdo->prepare($sql);
    $query->execute();

    // Le modèle retourne les données brutes
    return $query->fetchAll();
}
