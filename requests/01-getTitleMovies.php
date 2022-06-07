<?php

// Réaliser une requête qui permet de récupérer tous les titres des films
include ('../connect.php');


$get_movies_title = "SELECT title FROM infos_movies";
$req_movie = $db->query($get_movies_title);
$res=$req_movie->fetch();