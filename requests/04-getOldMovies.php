<?php

// Réaliser une requête qui permet de récupérer tous les films d'avant 2002
include ('../connect.php');

$get_movies_before_2002 = "SELECT title, release_year FROM infos_movies INNER JOIN release_years ON release_years.id = release_years_id HAVING release_year < 2002";

$req_movie_before_2002 = $db->query($get_movies_before_2002);
$res=$req_movie_before_2002->fetch();