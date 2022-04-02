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
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $email = $_POST['email'];
        $role = $_POST['role'];
        session_start();
        $_SESSION['username']=$username;
        $_SESSION['password']=$password;
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['surname'] = $_POST['surname'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['role'] = $_POST['role'];
        header("location:index.php");
        
    }


?>