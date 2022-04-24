<?php

require_once('dpconnect.php');

class contactForm extends dbConnect{   

    private $id;
    private $name;
    private $email;
    private $message;
    private $dbconn;


   public function __construct($id='',$name='',$email='',$message=''){
       
        $this->id=$id;
        $this->name=$name;
        $this->email=$email;
        $this->message=$message;

        $this->dbconn=$this->connectDB();
    }

    public function getId(){
        return $this->id;
    }

    public function setName($name){
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setMessage($message){
        $this->message=$message;
    }
    public function getMessage(){
        return $this->message;
    }

    public function insertContactForm(){
        $sql = "INSERT INTO contactform (id,name,email,message) VALUES (:id,:name,:email,:message)";
    
        $stm=$this->dbconn->prepare($sql);
        $stm->bindParam('id',$this->id);
        $stm->bindParam(':name',$this->name);
        $stm->bindParam(':email',$this->email);
        $stm->bindParam(':message',$this->message);
        $stm->execute();
    }

    public function getContactForm(){

        $sql="SELECT * FROM contactform";
        $stm=$this->dbconn->prepare($sql);
        $stm->execute();
        $contactform=$stm->fetchAll(PDO::FETCH_ASSOC);
        return $contactform;

    }
}