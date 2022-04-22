<?php

session_start();
if(!isset($_SESSION['username'])){
    header("location:index.php");
}else{
if ($_SESSION['role'] != 'admin'){
    header("location:index.php");
}
$movieId = $_GET['id'];
include_once 'validate\moviesModels.php';

$movie = new Movies();

$movies = $movie->getMoviesById($movieId);

$movie->deleteMovie($movieId);


header("location:dashboard.php");
}

?>