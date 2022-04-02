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
        
   
         
    </tr>
   
    ";
    /*mrenda tr
    <td><a  href='edit.php?id=$u[id]'>Edit</a> </td>
         <td><a  href='delete.php?id=$u[id]'>Delete</a></td>
    */
                }
                ?>
            </table>
</form>
        <?php
        require_once 'footer.php';
}
        ?>
    </body>
</html>