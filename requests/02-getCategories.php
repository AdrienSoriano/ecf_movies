<?php

// Réaliser une requête qui permet de récupérer toutes les catégories

include ('../connect.php');


$get_cat = "SELECT category FROM categories";
$req_cat = $db->query($get_cat);
    while($res=$req_cat->fetch()){
        /* print_r($res['category']."\n"); */
    }

// Réaliser une requête qui permet d'afficher le nombre de films par catégories

$get_movies_cat = "SELECT COUNT(infos_movies.title), categories.category FROM categories_has_infos_movies INNER JOIN categories ON categories.id = categories_has_infos_movies.categories_id INNER JOIN infos_movies ON infos_movies.id = categories_has_infos_movies.infos_movies_id GROUP BY category";
$req_movie_cat = $db->query($get_movies_cat);
$res=$req_movie_cat->fetch();