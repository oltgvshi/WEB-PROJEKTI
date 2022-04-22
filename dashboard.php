<?php 
session_start();

if(!isset($_SESSION['username'])){
    header("location:index.php");
}else{
if ($_SESSION['role'] != 'admin'){
    header("location:index.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
    <style>
        form{
            display:flex;
            flex-direction: column;
            height:420px;
            width: 40%;
            justify-content: space-between;
            color:white;
            align-items: center;
        }

        table{
            
            border-collapse: separate;
            font-family: 'Roboto';
            border-collapse: collapse;
            border: solid #2d2d44;
            padding: 2px;
        }
        th,td,tr{
            padding: 5px;
            border:1px solid white;
            
        }

        caption{
            font-size: 25px;
            font-family: 'Roboto';
        }
       td a{
            text-decoration:none;
            color:white;
            background-color: #2d2d44;
            padding:2px;
            border:1px solid #2d2d44;
            border-radius: 5px;
            transition: .5s ease;
           
            
       }

       td a:hover{
           color: white;
           background-color: transparent;
           transition: .5s ease;
       }
</style>
        <link rel="stylesheet" href="css\style.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <script src="https://kit.fontawesome.com/4480201544.js" crossorigin="anonymous"></script>
        <title></title>
    </head>
    <body>
        <header>
            <div id="left">
            <a href="index.php"><img src="Logo/Logo_white.png" alt="Logo" id="logoheader"></a>
            </div>
        </header>
        <div class="main" style="min-height:600px;
        padding-top:30px;display:flex;flex-direction:row;justify-content:space-around;flex-wrap:wrap;">
        <table style="max-height:10px; margin-left:2.60%;margin-bottom:3%" >
                <caption>USERS TABLE</caption>

                <tr>

                    <th>ID</th>
                    <th>NAME</th>
                    <th>SURNAME</th>
                    <th>USERNAME</th>
                    <th>Email</th>
                    <th>PASSWORD</th>
                    <th>ROLE</th>
                    <th>EDIT</th>
                    <th>DELETE</th>

                </tr>
                <?php

                require_once('validate\usersModels.php');
              
                $user = new Users();

                $users = $user->getUsers();

                foreach ($users as $u) {
                    echo
                    "
                <tr>
                <td>$u[id]</td>
                <td>$u[name]</td>
                <td>$u[surname] </td>
                <td>$u[email] </td>
                <td>$u[username] </td>
                <td>$u[password] </td>
                <td>$u[role]</td>
                <td><a  href='edit.php?id=$u[id]'>Edit</a> </td>
                <td><a  href='delete.php?id=$u[id]'>Delete</a></td>
        
   
         
                </tr>
            
                ";
                }
                ?>
        </table>
            

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <h4 style="font-family:'Calibri';">Add a New Product</h4>
            <h6>Movie Image</h6>
            <input style="width:40%" type="text" id="imageID" name="image" placeholder="Type Movie Image">
            <h6>Movie Title</h6>
            <input style="width:40%" type="text" id="titleID" name="title" placeholder="Type Movie Title">
            <h6>Movie Year</h6>
            <input style="width:40%" type="text" id="yearID" name="year" placeholder="Type Movie Year">
            <h6>Movie Length</h6>
            <input style="width:40%" type="text" id="lengthID" name="length" placeholder="Type Movie Length">
            <h6>Movie Genre</h6>
            <input style="width:40%" type="text" id="genreID" name="genre" placeholder="Type Movie Genre">
            <input style="align-self:center"type="submit" id="register" name="insertButton" value="Insert">
            <?php include_once 'validate\movieValidate.php'?>
        </form>
        </div>
        <div class="main" >
        <table style="max-height:10px; margin-left:2.60%;margin-bottom:3%" >
                <caption>MOVIES TABLE</caption>

                <tr>

                    <th>ID</th>
                    <th>GENRE ID</th>
                    <th>MOVIE IMAGE NAME</th>
                    <th>MOVIE TITLE</th>
                    <th>MOVIE YEAR</th>
                    <th>MOVIE LENGTH</th>
                    <th>MOVIE DESCRIPTION</th>
                    <th>MOVIE LINK</th>
                    <th>EDIT</th>
                    <th>DELETE</th>

                </tr>
                <?php

                require_once('validate\moviesModels.php');
              
                $movie = new Movies();

                $movies = $movie->getMovies();

                foreach ($movies as $m){
                    echo
                    "
                <tr>
                <td>$m[id]</td>
                <td>$m[genre_id]</td>
                <td>$m[image]</td>
                <td>$m[title] </td>
                <td>$m[year] </td>
                <td>$m[length] </td>
                <td>$m[moviedescription] </td>
                <td>$m[movielink] </td>
                <td><a  href='editMovies.php?id=$m[id]'>Edit</a> </td>
                <td><a  href='deleteMovies.php?id=$m[id]'>Delete</a></td>
        
   
         
                </tr>
            
                ";
                }
                ?>
        </table>
            </div>
        <?php
        require_once 'footer.php';
}
        ?>
    </body>
</html>