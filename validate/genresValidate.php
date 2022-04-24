<?php

include_once 'validate\genresModels.php';

if(isset($_POST['insertButton'])){
    if(empty($_POST['genre'])){
        echo "<h5 style='color:red;font-style:italic;font-family:'Courier New'';'>Fill All Fields</h5>";
    }
   
    else{
        
        $Genre = new Genres();
        $Genre->setGenre($_POST['genre']);
        $Genre->insertGenres();

        include_once 'activitiesModels.php';

        $username = $_SESSION['username'];

        $activity = "Inserted Genre";

        $genre= $_POST['genre'];

        $activities = new activitiesModels();

        $activities->activities($username,$activity,$genre);
    }


}


?>