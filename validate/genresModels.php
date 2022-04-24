<?php
require_once('dpconnect.php');
class Genres extends dbConnect{


    private $genreID;
    private $genre;

    
    public function __construct($genreID='', $genre=''){
        $this->genre=$genre;
        $this->genreID=$genreID;

        
        $this->dbconn=$this->connectDB();
    }


    public function getGenre(){
        return $this->genre;
    }

    public function setGenre($genre){
        $this->genre=$genre;
    }
    public function getGenreID(){
        return $this->genreID;
    }

    public function insertGenres(){
        $sql="INSERT INTO ganre (genreID,genre) VALUES (:genreID,:genre)";
    
        $stm=$this->dbconn->prepare($sql);
        $stm->bindParam(':genreID',$this->genreID);
        $stm->bindParam(':genre',$this->genre);

        $stm->execute();
    }


    public function getGenres(){
        $sql="SELECT * FROM ganre";
        $stm=$this->dbconn->prepare($sql);
        $stm->execute();
        $genres=$stm->fetchAll(PDO::FETCH_ASSOC);
        return $genres;
    }

    public function getGenresById($id){

        $sql = "SELECT * from ganre WHERE genreID = '$id'";
        $stm=$this->dbconn->prepare($sql);

        $stm->execute();
        $ganre = $stm->fetch();

        return $ganre;
    }
    

    public function updateGenres($genreID,$genre){
        $sql = "UPDATE ganre SET genre=? WHERE genreID=?";

        $stm=$this->dbconn->prepare($sql);

        $stm->execute([$genre,$genreID]);

        echo  "<script>alert('Update was successful')</script>";
    }

    public function deleteGenres($genreID){
        
        $sql = "DELETE FROM ganre WHERE genreID=?";

        $stm=$this->dbconn->prepare($sql);

        $stm->execute([$genreID]);

        echo "<script>alert('Delete was successful')</script>";
    }


}


?>