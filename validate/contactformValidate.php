<?php

include_once 'validate\contactModels.php';

if(isset($_POST['submit'])){
    if(empty($_POST['name']) || empty($_POST['message'])|| empty($_POST['email'])){
        echo "<h5 style='color:red;font-style:italic;font-family:'Courier New'';'>Fill All Fields</h5>";
    }
   
    else{
        
        $contactForm = new contactForm();
        $contactForm->setName($_POST['name']);
        $contactForm->setEmail($_POST['email']);
        $contactForm->setMessage($_POST['message']);
        $contactForm->insertContactForm();

        echo  "<script>alert('Insert was successful')</script>";
    }


}


?>