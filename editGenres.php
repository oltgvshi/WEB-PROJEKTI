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


?>



<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h3>Edit</h3>
    <form action="" method="post">
        <input type="text" name="genreID"  value="<?=$genre['genreID']?>" readonly> <br><br> 
        <input id="nameINP" type="text" name="genre"  value="<?=$genre['genre']?>"> <br> 
        <input type="submit" id="editButton" name="editButton" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editButton'])){	
    $id = $genre['genreID'];
    $g = $_POST['genre'];

    $genres->updateGenres($id,$g);
    header("location:dashboard.php");

}
}

?>