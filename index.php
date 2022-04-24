<?php
session_start();
$hide = "";
include_once 'validate\moviesModels.php';

if(isset($_SESSION['username'])){
    if ($_SESSION['role'] == "admin") {
        $hide = "";
    } else {
        $hide = "hide";
    }
   }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css\style.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <script src="https://kit.fontawesome.com/4480201544.js" crossorigin="anonymous"></script>
        <title></title>
        <style>
            .hide{
                display: none;
            }
        </style>
    </head>
    <body>
        
        <?php
        require_once('header.php');
        ?>

        <div class="sliderdiv">
            <div class="slidermain">
                <div class="slider">
                    <div class="slide">         
                        <img src="Slider/foto1.png" alt="sliderfoto" class="sliderfoto">
                        <div class="moviedesc">
                            <h1>Spider-Man: No Way Home</h1>
                            <h2 class="moviegenre">Action, 2021</h2>
                        </div>  
                        <a href=""><button class="watchnow">Watch Now</button></a>
                    </div>

                    <div class="slide">
                        <img src="Slider/foto2.png" alt="sliderfoto" class="sliderfoto">
                        <div class="moviedesc">
                            <h1>Red Notice</h1>
                            <h2 class="moviegenre">Comedy, 2020</h2>
                        </div>  
                        <a href=""><button class="watchnow">Watch Now</button></a>
                    </div>

                    <div class="slide">
                        <img src="Slider/foto3.png" alt="sliderfoto" class="sliderfoto">
                        <div class="moviedesc">
                            <h1>Last Night in Soho</h1>
                            <h2 class="moviegenre">Horror, 2021</h2>
                        </div>  
                        <a href=""><button class="watchnow">Watch Now</button></a>
                    </div>

                    <div class="slide">
                        <img src="Slider/foto4.png" alt="sliderfoto" class="sliderfoto">
                        <div class="moviedesc">
                            <h1>Sing 2</h1>
                            <h2 class="moviegenre">Animation, 2021</h2>
                        </div>  
                        <a href=""><button class="watchnow">Watch Now</button></a>
                    </div>


                </div>
                <div class="controls">
                    <a class="prev">&#10094;</a>
                    <a class="next">&#10095;</a>
                </div>
                
            </div>
        </div>
                    
        <div class='main'>
            <?php
                $genre = new Movies();
                $genres = $genre->getGenres();

                foreach($genres as $genre){
                    echo "<div class='movieslist'>
                    <h2 class='moviegenreh'>$genre[genre]</h2>
                    <div class='moviesslide'>";
                    $genreID = $genre['genreID'];
                    $movie = new Movies();
                    $movies = $movie->getMoviesByGenre($genreID);

                    foreach ($movies as $m){
                        echo "
                        <div class='filmimain'>
                        <div class='play'>
                            <img src='movieposters/$m[image].jpg' alt='' class='posterimg'>
                            <div class='list'>
                                <img src='movieposters/greybg.png' alt='' class=''>
                                <a href='movie.php?id=$m[id]'><p class='playbutton'>&#9654;</p></a>
                                <p class='listadd'>Add to My List</p>
                                </div>
                            </div>
                                    <h4 class='movietitull'><a href='movie.php?id=$m[id]'>$m[title]</a></h4>
                                    
                                    <p class='moviedescript'>($m[year]) · $m[length] </p>
                                    <p class='moviedescript'>$genre[genre]</p>
                                </div>
                            ";
                        }
                    
                    echo "</div></div>";
                    echo "<hr class='horizontal'>";
                }
            ?>

        </div>
        <?php
        require_once('footer.php');
        ?>
        <script src="javascript\script.js"></script>
    </body>
</html>