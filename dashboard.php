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
     <?php
        require_once('header.php');
        ?>

        <div class="main">
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
            
        <hr>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <h4 style="font-family:'Calibri';">Add a New MOVIE</h4>
            <?php
                $genres = "SELECT * FROM ganre";
                $connection = mysqli_connect("localhost", "root", "", "web_projekti");
                $genre_run = mysqli_query($connection, $genres);

                if(mysqli_num_rows($genre_run) > 0){ ?>
                    <h6>Genre</h6>
                    <select name="genre_id" required>
                        <option value="" disabled>Choose genre</option>
                        <?php
                            foreach($genre_run as $row){
                        ?>
                            <option value="<?php echo $row['genreID']?>"><?php echo $row['genre']; ?></option>
                        <?php
                            }
                        ?>
                        
                    </select>

                    <?php
                }
                else{
                    echo "No data available";
                }
                
            ?>
            <h6>Movie Image</h6>
            <input style="width:40%" type="text" id="imageID" name="image" placeholder="Type Movie Image" required>
            <h6>Movie Title</h6>
            <input style="width:40%" type="text" id="titleID" name="title" placeholder="Type Movie Title" required>
            <h6>Movie Year</h6>
            <input style="width:40%" type="text" id="yearID" name="year" placeholder="Type Movie Year" required>
            <h6>Movie Length</h6>
            <input style="width:40%" type="text" id="lengthID" name="length" placeholder="Type Movie Length" required>
            <h6>Movie Description</h6>
            <input style="width:40%" type="text" id="moviedescription" name="moviedescription" placeholder="Type Movie Description" required>
            <h6>Movie Link</h6>
            <input style="width:40%" type="text" id="movielink" name="movielink" placeholder="Type Movie Link" required>
            <input style="align-self:center"type="submit" id="register" name="insertButton" value="Insert">
            <?php include_once 'validate\movieValidate.php'?>
        </form>

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
                <td>".substr($m['moviedescription'], 0, 100)."...</td>
                <td>$m[movielink] </td>
                <td><a  href='editMovies.php?id=$m[id]'>Edit</a> </td>
                <td><a  href='deleteMovies.php?id=$m[id]'>Delete</a></td>
        
   
         
                </tr>
            
                ";
                }
                ?>
        </table>
            </div>

        <hr>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" style="height:120px">
            <h4 style="font-family:'Calibri';">Add a New Genre</h4>
            <h6>Movie Genre</h6>
            <input style="width:40%" type="text" id="genre" name="genre" placeholder="Type Genre" required>
            <input style="align-self:center"type="submit" id="registerGenre" name="insertButtonGenre" value="Insert">
            <?php include_once 'validate\genresValidate.php'?>
        </form>


        <table style="max-height:10px; margin-left:2.60%;margin-bottom:3%" >
                <caption>GENRES TABLE</caption>

                <tr>
                    <th>ID</th>
                    <th>GENRE</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
                <?php

                require_once('validate\genresModels.php');
              
                $genres = new Genres();

                $genre = $genres->getGenres();

                foreach ($genre as $g){
                    echo
                    "
                <tr>
                <td>$g[genreID]</td>
                <td>$g[genre]</td>
                <td><a  href='editGenres.php?id=$g[genreID]'>Edit</a> </td>
                <td><a  href='deleteGenres.php?id=$g[genreID]'>Delete</a></td>   
                </tr>
            
                ";
                }
                ?>
        </table>


        </div>
        
                <hr>
        <div class="main" >
        <table style="max-height:10px; margin-left:2.60%;margin-bottom:3%" >
                <caption>ACTIVITIES TABLE</caption>

                <tr>
                    <th>ID</th>
                    <th>USERNAME</th>
                    <th>ACTIVITY TYPE</th>
                    <th>CHANGED ITEM</th>
                    <th>TIME</th>
                </tr>
                <?php

                require_once('validate\activitiesModels.php');
              
                $activities = new activitiesModels();

                $activitie = $activities->getActivites();

                foreach ($activitie as $a){
                    echo
                    "
                <tr>
                <td>$a[id]</td>
                <td>$a[username]</td>
                <td>$a[activityType]</td>
                <td>$a[changedItem] </td>
                <td>$a[time] </td>    
                </tr>
            
                ";
                }
                ?>
        </table>
        </div>

        <div class="main" >
        
        </div>
                <hr>
        <div class="main" >
        <table style="max-height:10px; margin-left:2.60%;margin-bottom:3%" >
                <caption>CONTACT FORM TABLE</caption>

                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>MESSAGE</th>
                </tr>
                <?php

                require_once('validate\contactModels.php');
              
                $contact = new contactForm();

                $cont = $contact->getContactForm();

                foreach ($cont as $c){
                    echo
                    "
                <tr>
                <td>$c[id]</td>
                <td>$c[name]</td>
                <td>$c[email]</td>
                <td>$c[message] </td>    
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