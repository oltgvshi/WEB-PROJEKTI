<?php
require_once('.\connection\dpconnect.php');
class User extends dbConnect{

    private $id;
    private $name;
    private $surname;
    private $username;
    private $email;
    private $password;
    private $role;
    private $dbconn;


    public function __construct($id='',$name='',$surname='',$username='',$email='',$password='',$role=''){
        $this->id = $id;
        $this->name=$name;
        $this->surname=$surname;
        $this->username=$username;
        $this->email=$email;
        $this->password=$password;
        $this->role=$role;
        
        
        $this->dbconn=$this->connectDB();
    }

    public function getId(){
        return $this->id;
    }

    public function setName($name){
        $this->name=$name;
    }
    public function getName(){
        return $this->user;
    }
    public function setSurname($surname){
        $this->surname=$surname;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function setUsername($username){
        $this->username=$username;
    }
    public function getUsername(){
        return $this->username;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setPassword($password){
        $this->password=$password;
    }
    public function getPassword(){
        return $this->password;
    }

    public function insertUsers(){
        $sql="INSERT INTO users (name,surname,username,email,password) VALUES (:name,:surname,:username,:email,:password,)";
    
        $stm=$this->dbconn->prepare($sql);
        $stm->bindParam(':name',$this->name);
        $stm->bindParam(':surname',$this->surname);
        $stm->bindParam(':username',$this->username);
        $stm->bindParam(':email',$this->email);
        $stm->bindParam(':password',$this->password);

        $stm->execute();
    }

    public function getUsers(){
        $sql="SELECT * FROM users";
        $stm=$this->dbconn->prepare($sql);
        $stm->execute();
        $users=$stm->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public function getUsersByUsername($username){
        $sql="SELECT * FROM user where username=$username";
        $stm=$this->dbconn->prepare($sql);
        $stm->execute();
        $users=$stm->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public function updateDhenat(){
        $sql='UPDATE users SET name=?, surname=?, username=?, email=? where password=?';
        
        $stm=$this->dbconn->prepare($sql);
        $stm->execute([$this->name, $this->surname,$this->username,$this->email, $this->password]);
        }
}