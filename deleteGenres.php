<?php

session_start();
if(!isset($_SESSION['username'])){
    header("location:index.php");
}else{
if ($_SESSION['role'] != 'admin'){
    header("location:index.php");
}
$genreID = $_GET['id'];
include_once 'validate\genresModels.php';

$genres = new Genres();

$genre = $genres->getGenresById($genreID);

$genres->deleteGenres($genreID);

header("location:dashboard.php");

echo  "<script>alert('Delete was successful')</script>";
}

?>