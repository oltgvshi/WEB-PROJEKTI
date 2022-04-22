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

$users->deleteUser($userId);


header("location:dashboard.php");
}

?>