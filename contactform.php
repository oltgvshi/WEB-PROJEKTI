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
</head>
<body>
    <?php
        require_once('header.php');
        ?>
    <h3>Contact us</h3>
    <form method="post">
    
        <label for="Name" >Your name</label><br>
        <input type="text" id='name' name="name"  required><br>
        <label for="Email" >Your email address</label><br>
        <input type="email"  id='email' name="email"  required><br>
        <label for="Message" >Your message</label><br>
        <textarea id="Message"  id='message'name="message" required></textarea><br>
        <button type="submit" id='submit' name="submit" value="Insert">Send Message</button><br>
        <?php include_once 'validate\contactformValidate.php'?>
    </form>
    <?php
        require_once('footer.php');
        ?>
</body>
</html>