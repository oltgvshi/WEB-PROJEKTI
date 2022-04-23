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
        $movie->setMoviedescription($_POST['moviedescription']);
        $movie->setMovielink($_POST['movielink']);
        $movie->insertMovies();

        include_once 'activitiesModels.php';

        $username = $_SESSION['username'];

        $activity = "Inserted Movie";

        $title= $_POST['title'];

        $activities = new activitiesModels();

        $activities->activities($username,$activity,$title);
        
        echo  "<script>alert('Insert was successful')</script>";
    }


}


?>