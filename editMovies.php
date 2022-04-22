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
        <input type="text" name="id"  value="<?=$movies['id']?>" readonly> <br><br>
        <!-- <input id="surnameINP" type="id" name="title"  value=""> <br>
        <label id="surnameerror" for="surname"></label><br> -->
        <input id="nameINP" type="text" name="image"  value="<?=$movies['image']?>"> <br> 
        <label id="nameerror" for="name"></label><br>
        <input id="surnameINP" type="text" name="title"  value="<?=$movies['title']?>"> <br>
        <label id="surnameerror" for="surname"></label><br>
        <input id="emailINP"  type="text" name="year"  value="<?php  echo $movies['year'];?>"> <br>
        <label id="emailerror" for="email"></label><br>
        <input id="moviesnameINP"  type="text" name="length"  value="<?=$movies['length']?>"> <br>
        <label id="moviesnameerror" for="moviesname"></label><br>
        <input id="passwordINP"  type="text" name="moviedescription"  value="<?=$movies['moviedescription']?>"> <br>
        <label id="passworderror" for="password"></label><br>
        <input id="passwordINP"  type="text" name="movielink"  value="<?=$movies['movielink']?>"> <br>
        <label id="passworderror" for="password"></label><br>
        <input type="submit" id="editButton" name="editButton" value="save"> <br> <br>
    </form>
</body>
</html>

<?php 

if(isset($_POST['editButton'])){	
    $id = $movies['id'];
    //$genre_id = $_POST['genre_id'];
    $image = $_POST['image'];
    $title = $_POST['title'];
    $year = $_POST['year'];
    $length = $_POST['length'];
    $moviedescription = $_POST['moviedescription'];
    $movielink = $_POST['movielink'];
    

    $movie->updateMovie($id,$image,$title,$year,$length,$moviedescription,$movielink);
    header("location:dashboard.php");

}
}

?>