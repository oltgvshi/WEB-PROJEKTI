<?php
require_once('dpconnect.php');
class Users extends dbConnect{

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

    public function setRole($role){
        $this->role=$role;
    }
    public function getRole(){
        return $this->role;
    }

    public function insertUsers(){
        $sql="INSERT INTO users (id,name,surname,username,email,password) VALUES (:id,:name,:surname,:username,:email,:password)";
    
        $stm=$this->dbconn->prepare($sql);
        $stm->bindParam('id',$this->id);
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

    public function getUserById($id){

        $sql = "SELECT * from users WHERE id = '$id'";
        $stm=$this->dbconn->prepare($sql);

        $stm->execute();
        $user = $stm->fetch();

        return $user;
    }


    public function updateUsers($id,$name,$surname,$username,$email,$password,$role){
        $sql = "UPDATE users SET name=?, surname=?, email=?, username=?, password=?, role=? WHERE id=?";

        $stm=$this->dbconn->prepare($sql);

        $stm->execute([$name, $surname, $email, $username, $password, $role, $id]);

        return  "<script>alert('Update was successful')</script>";
    }


    public function deleteUser($id){
        
        $sql = "DELETE FROM users WHERE id=?";

        $stm=$this->dbconn->prepare($sql);

        $stm->execute([$id]);

        echo "<script>alert('Delete was successful')</script>";
    }
    
}