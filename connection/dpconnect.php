<?php 
  
  class dbConnect{
    private $conn =null;
    private $host = 'localhost';
    private $dbname = 'web_projekti';
    private $username = 'root';
    private $password = '';
    
    public function connectDB(){
    
    try {
    $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname",
    $this->username, $this->password);
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) . "<br/>";
    $this->conn->setAttribute(PDO::FETCH_BOUND, PDO::FETCH_BOTH);
    
    } catch (PDOException $pdoe) {
    die("Lidhja ne databaze eshte gabim {$this->dbname} :" . $pdoe->getMessage());
    }
    return $this->conn;
        }
    }

    $link = new dbConnect();
    $link->connectDB();


?>