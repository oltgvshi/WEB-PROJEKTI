<?php
   if(isset($_POST['login'])){
       if(empty($_POST['username']) || empty($_POST['password'])){
           echo "Fill all fields!";
       }else{
           $username = $_POST['username'];
           $password = $_POST['password'];

           require_once('usersModels.php');
        
        $user = new User();

        $users = $user->getUsers();


           $i=0;
           foreach($users as $u){
               $i++;
               if($username == $u['username'] && $password == $u['password']){

                   session_start();
                   $_SESSION['username'] = $username;
                   $_SESSION['password'] = $password;
                   header("location:index.php");
                   exit();

               }else{
                   
                   if($i == sizeof($users)){
                    echo "<h5 style='margin-left:40%;color:red;'>!Incorrect Username or Password (Try Again)</h5>";
                    exit();
                   }
                   
               }
           }
       }
   }
 
?>