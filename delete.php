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

include_once 'validate\activitiesModels.php';

$username = $_SESSION['username'];

$deletedUser = $user['username'];

$activity = "Deleted user";

$activities = new activitiesModels();

$activities->activities($username,$activity,$deletedUser);

header("location:dashboard.php");
}

?>