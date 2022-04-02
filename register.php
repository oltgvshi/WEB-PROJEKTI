<?php 
session_start();

if(isset($_SESSION['username'])){
    header("location:index.php");
}

else{
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
                <!--<b><h2 id="topbrowse">Browse</h2></b>-->
            </div>

            <!--<div id="search">
                <input id="searchinput" type="text" placeholder="Search a movie">
            </div>-->

            <div id="butonat">
                <!--<button id="reg">Register</button>-->
                <a href="login.php"><button id="log">Login</button></a>
            </div>
        </header>
        <form action='' method="post">
        <div class="registerpage">
            <i class="far fa-user-circle" id="person"></i>

            <div class="name">
                <div class="namediv">
                    <h6>Name</h6>
                    <p id="nameerror"> </p>
                </div>
                <input type="text" id="nameinput" name="name" placeholder="Type your name">
            </div>

            <div class="surname">
                <div class="surnamediv">
                    <h6>Surname</h6>
                    <p id="surnameerror"> </p>
                </div>
                <input type="text" id="surnameinput"  name="surname" placeholder="Type your surname">
            </div>

            <div class="username">
                <div class="usernamediv">
                    <h6>Username</h6>
                    <p id="usernameerror"> </p>
                </div>
                <input type="text" id="usernameinput"  name="username" placeholder="Type your username">
            </div>

            <div class="email">
                <div class="emaildiv">
                    <h6>Email</h6>
                    <p id="emailerror"> </p>
                </div>
                <input type="text" id="emailinput"  name="email" placeholder="Type your email">
            </div>

            <div class="password">
                <div class="passworddiv">
                    <h6>Password</h6>
                    <p id="passworderror"> </p>
                </div>
                <input type="password" id="passwordinput"  name="password" placeholder="Type your password">
            </div>

            <button id="registerbuttoni"  name="register">Register</button>
        </div>
</form>
        <?php
        include_once 'validate\registerValidate.php';
        require_once 'footer.php';
}
        ?>
        <script src="javascript\register.js"></script>
    </body>
</html>