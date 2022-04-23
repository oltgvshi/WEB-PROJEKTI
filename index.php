<?php
session_start();
$hide = "";
include_once 'validate\moviesModels.php';
$movie = new Movies();

$movies = $movie->getMovies();

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
        <header>
            <div id="left">
                <a href="#"><img src="Logo/Logo_white.png" alt="Logo" id="logoheader"></a>
            </div>

            <div id="search">
                <input id="searchinput" type="text" placeholder="Search a movie">
            </div>
            <div id="butonat">
            <?php
                if(!isset($_SESSION['username'])){
                     echo '<a href="login.php"><button id="log">Login</button></a>';
                    }
                    else if(isset($_SESSION['username'])){
                        echo '<a href="logout.php"><button id="log">Logout</button></a>';
                    }        
                ?>
                <?php
                if(!isset($_SESSION['username'])){
                     echo '<a href="register.php"><button id="reg">Register</button></a';
                    }else{ ?>
                    <a href='dashboard.php'> <button id="reg" class="<?php echo $hide ?>">Dashboard</button></a>
                    <?php
                    }
                    
                ?>
            </div>
        </header>
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

        <div class="main">
            <div class="movieslist">
                <h2 class="moviegenreh"><a href="#">Most Popular</a></h2>
                <div class="moviesslide">
                    <?php
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
                                    <p class='movietitull'>$m[title]</p>
                                    <p class='moviedescript'>$m[year] $m[length] </p>
                                    <p class='moviedescript'>$m[genre_id]</p>
                                </div>
                            ";
                        }
                    

                    ?>
                    
                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>

                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>

                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>

                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>

                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>

                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>
                </div>
            </div>

            <hr class="horizontal">

            <div class="movieslist">
                <h2 class="moviegenreh"><a href="#">Most Popular</a></h2>
                <div class="moviesslide">
                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>
                    
                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>

                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>

                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>

                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>

                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>

                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>
                </div>
            </div>

            <hr class="horizontal">

            <div class="movieslist">
                <h2 class="moviegenreh"><a href="#">Most Popular</a></h2>
                <div class="moviesslide">
                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>
                    
                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>

                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>

                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>

                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>

                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>

                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>
                </div>
            </div>

            <hr class="horizontal">

            <div class="movieslist">
                <h2 class="moviegenreh"><a href="#">Most Popular</a></h2>
                <div class="moviesslide">
                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>
                    
                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>

                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>

                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>

                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>

                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>

                    <div class="filmimain">
                        <div class="play">
                            <img src="movieposters/nowayhome.jpg" alt="" class="posterimg">
                            <div class="list">
                                <img src="movieposters/greybg.png" alt="" class="">
                                <a href="movie.php"><p class="playbutton">&#9654;</p></a>
                                <p class="listadd">Add to My List</p>
                            </div>
                        </div>

                        <h4 class="movietitull"><a href="#">No Way Home</a></h4>
                        <p class="moviedescript">(2018) · 1 hr 22 min</p>
                        <p class="moviedescript">Comedy, Drama, Romance</p>
                    </div>
                </div>
            </div>

        </div>
        <?php
        require_once('footer.php');
        ?>
        <script src="javascript\script.js"></script>
    </body>
</html>