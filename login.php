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
                <a href="register.php"><button id="reg">Register</button></a>
                <!--<a href="login.php"><button id="log">Login</button></a>-->
            </div>
        </header>
        <form id="formlogin" method="post" class="loginform" action="<?php echo $_SERVER['PHP_SELF'] ?>">

        <div class="loginpage">
            <i class="far fa-user-circle" id="person"></i>
            <div class="usernamelogin">
                <div class="usernamedivlogin">
                    <h6>Username</h6>
                    <p id="usernameerrorlogin"> </p>
                </div>
                <input type="text" id="usernameinputlogin" name='username' placeholder="Type your username">
            </div>


            <div class="passwordlogin">
                <div class="passworddivlogin">
                    <h6>Password</h6>
                    <p id="passworderrorlogin"> </p>
                </div>
                <input type="password" id="passwordinputlogin" name='password' placeholder="Type your password">
            </div>


            <button tybe='submit' id="loginbuttoni" name='login' >Login</button>

        </div>
        </form>
        
        <script src="javascript\login.js"></script>
        <?php
        require_once('footer.php');
        include_once 'validate\loginValidate.php';
}
        ?>
        
    </body>
</html>
