<?php 
include_once "./classes/Movie.php";
include_once "./classes/Genre.php";

$film = new Movie("Pollac", "data:", 5, new Genre("categoria: "));
$randomGenre = new Genre("Categoria: ");
// $film->randomReleaseDate();

var_dump($film);
var_dump($randomGenre);


?>