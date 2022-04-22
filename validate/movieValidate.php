<?php

include_once 'validate\moviesModels.php';

if(isset($_POST['insertButton'])){
    if(empty($_POST['image']) || empty($_POST['genre_id'])|| empty($_POST['title']) || empty($_POST['year']) || empty($_POST['length']) || empty($_POST['movielink']) || empty($_POST['moviedescription'])){
        echo "<h5 style='color:red;font-style:italic;font-family:'Courier New'';'>Fill All Fields</h5>";
    }
   
    else{
        
        $movie = new Movies();
        $movie->setImage($_POST['image']);
        $movie->setTitle($_POST['title']);
        $movie->setGenre_id($_POST['genre_id']);
        $movie->setYear($_POST['year']);
        $movie->setLength($_POST['length']);
        $movie->setMoviedescription($_POST['moviesetmoviedescription']);
        $movie->setMovielink($_POST['moviesetmovielink']);
        $movie->insertMovies();
        
        echo  "<script>alert('Insert was successful')</script>";
    }


}


?>