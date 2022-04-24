<?php

session_start();

$movieID = $_GET['id'];
include_once 'validate\moviesModels.php';

$movie = new Movies();
$movies = $movie->getMoviesById($movieID);
$genreID = $movies['genre_id'];
$genre = $movie->getGenresById($genreID);

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css\style.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <script src="https://kit.fontawesome.com/4480201544.js" crossorigin="anonymous"></script>
        <title></title>
    </head>
    <body>
        <?php
        require_once('header.php');
        ?>
       
        <div class="main">
            <iframe width="100%"  height="900px" src="https://www.youtube.com/embed/<?php  echo $movies['movielink']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="description">
                <div class="img">
                    <img src="movieposters/<?php  echo $movies['image']; ?>.jpg" alt="" class="movieposterimg">
                    <button class="addlist">Add to My List</button>
                </div>

                <div class="descr">
                    <h1 class="movietitledsc"> <?php  echo $movies['title']; ?> </h1>
                    <hr class="horizontal">
                    <p class="moviedescript">(<?php  echo $movies['year']; ?>) · <?php  echo $movies['length']; ?></p>
                    <p class="moviedescript"><?php  echo $genre['genre']; ?></p>
                    <br>
                    <p class="tematika"><?php  echo $movies['moviedescription']; ?></p>
                    <hr class="horizontal">
                </div>
            </div>

        </div>

        <?php
        require_once('footer.php');
        ?>
        <script src="javascript\script.js"></script>
    </body>
</html>