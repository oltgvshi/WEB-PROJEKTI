<?php

session_start();
if(!isset($_SESSION['username'])){
    header("location:index.php");
}else{
if ($_SESSION['role'] != 'admin'){
    header("location:index.php");
}

$userId = $_GET['id'];
include_once 'validate\usersModels.php';

$users = new Users();

$user = $users->getUserById($userId);

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
        <input type="text" name="id"  value="<?=$user['id']?>" readonly> <br><br>
        <input id="nameINP" type="text" name="name"  value="<?=$user['name']?>"> <br> 
        <label id="nameerror" for="name"></label><br>
        <input id="surnameINP" type="text" name="surname"  value="<?=$user['surname']?>"> <br>
        <label id="surnameerror" for="surname"></label><br>
        <input id="emailINP"  type="text" name="email"  value="<?php  echo $user['email'];?>"> <br>
        <label id="emailerror" for="email"></label><br>
        <input id="usernameINP"  type="text" name="username"  value="<?=$user['username']?>"> <br>
        <label id="usernameerror" for="username"></label><br>
        <input id="passwordINP"  type="text" name="password"  value="<?=$user['password']?>"> <br>
        <label id="passworderror" for="password"></label><br>
        <input id="roleINP"  type="text" name="role"  value="<?=$user['role']?>"> <br>
        <label id="roleerror" for="role"></label><br>

        <input type="submit" id="editButton" name="editButton" value="save"> <br> <br>
    </form>
    <script src="javascript\edit.js"></script>
</body>
</html>

<?php 

if(isset($_POST['editButton'])){	
    $id = $user['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    

    $users->updateUsers($id,$name,$surname,$username,$email,$password,$role);
    

    include_once 'validate\activitiesModels.php';
    

    $username = $_SESSION['username'];

    $changedUser = $_POST['name']." ".$_POST['surname'];

    $activity = "Edited user";

    $activities = new activitiesModels();

    $activities->activities($username,$activity,$changedUser);

    header("location:dashboard.php");

}
}

?>