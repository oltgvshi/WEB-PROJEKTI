<?php
session_start();
$hide = "";
include_once 'validate\moviesModels.php';

if(isset($_SESSION['username'])){
    if ($_SESSION['role'] == "admin") {
        $hide = "";
    } else {
        $hide = "hide";
    }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <script src="https://kit.fontawesome.com/4480201544.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        require_once('header.php');
        ?>
    <div class="loginpage">
    <h3>Contact us</h3>
    <form method="post">
    
        <label for="Name" ><h6>Your Name</h6></label><br>
        <input type="text" id='usernameinputlogin' name="name"  required><br>
        <label for="Email" ><h6>Your Email Address</h6></label><br>
        <input type="email"  id='usernameinputlogin' name="email"  required><br>
        <label for="Message" ><h6>Your Message</h6></label><br>
        <textarea id="usernameinputlogin" name="message" required></textarea><br>
        <button type="submit" id='submit' name="submit" value="Insert">Send Message</button><br>
        <?php include_once 'validate\contactformValidate.php'?>
    </form>
    </div>
    <script src="javascript\login.js"></script>
    <?php
        require_once('footer.php');
    ?>
        
</body>
</html>