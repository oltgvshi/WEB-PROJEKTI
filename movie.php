<?php

session_start();

$movieID = $_GET['id'];
include_once 'validate\moviesModels.php';

$movie = new Movies();

$movies = $movie->getMoviesById($movieID);

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
        <header>
            <div id="left">
                <a href="index.php"><img src="Logo/Logo_white.png" alt="Logo" id="logoheader"></a>
                <b><h2 id="topbrowse">Browse</h2></b>
            </div>

            <div id="search">
                <input id="searchinput" type="text" placeholder="Search a movie">
            </div>

            <div id="butonat">
                <a href="register.php"><button id="reg">Register</button></a>
                <a href="login.php"><button id="log">Login</button></a>
            </div>
        </header>
       
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
                    <p class="moviedescript">(<?php  echo $movies['year']; ?>) <?php  echo $movies['length']; ?></p>
                    <p class="moviedescript"><?php  echo $movies['genre_id']; ?></p>
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