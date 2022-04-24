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

include_once 'validate\activitiesModels.php';

$username = $_SESSION['username'];

$deletedMovie = $movies['title'];

$activity = "Deleted movie";

$activities = new activitiesModels();

$activities->activities($username,$activity,$deletedMovie);

header("location:dashboard.php");

echo  "<script>alert('Delete was successful')</script>";
}

?>