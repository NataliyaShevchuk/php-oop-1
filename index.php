<?php 
require_once "Movie.php";

$film = new Movie();
$film->title = "Adriana";
$film->genre = "Horror";
$film->randomReleaseDate();

var_dump($film);


?>