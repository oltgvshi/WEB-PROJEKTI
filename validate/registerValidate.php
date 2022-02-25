<?php
    require_once('usersModels.php');
    if(isset($_POST['register'])){
        $users = new Users();
        $users->setName($_POST['name']);
        $users->setSurname($_POST['surname']);
        $users->setUsername($_POST['username']);
        $users->setEmail($_POST['email']);
        $users->setPassword($_POST['password']);
        $users->insertUsers();

        $username = $_POST['username'];
        $password = $_POST['password'];
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        header("location:index.php");
        
    }


?>