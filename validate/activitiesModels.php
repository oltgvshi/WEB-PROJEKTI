<?php

require_once('dpconnect.php');

class activitiesModels extends dbConnect{   

    private $id;
    private $username;
    private $activityType;
    private $changedItem;
    private $time;
    private $dbconn;


   public function __construct($id='',$username='',$activityType='',$changedItem='',$time=''){
       
        $this->id=$id;
        $this->username=$username;
        $this->activityType=$activityType;
        $this->changedItem=$changedItem;
        $this->time=$time;

        $this->dbconn=$this->connectDB();
    }


    public function activities($username,$activityType,$changedItem){


        $datetime = date("d/m/Y g:i a");
        $sql = "INSERT INTO activities (username,activityType,changedItem,time) values (?,?,?,?)";

        
        $stm=$this->dbconn->prepare($sql);

        $stm->execute([$username,$activityType,$changedItem,$datetime]);



    }

    public function getActivites(){

        $sql="SELECT * FROM activities";
        $stm=$this->dbconn->prepare($sql);
        $stm->execute();
        $activitie=$stm->fetchAll(PDO::FETCH_ASSOC);
        return $activitie;

    }
}