<?php
require_once('dpconnect.php');
class Movies extends dbConnect{

    private $id;
    private $genre_id;
    private $image;
    private $title;
    private $year;
    private $length;
    private $moviedescription;
    private $movielink;
    private $dbconn;
    
    public function __construct($id='', $genre_id='', $image='',$title='',$year='',$length='',$moviedescription='',$movielink=''){
        $this->id = $id;
        $this->image=$image;
        $this->genre_id=$genre_id;
        $this->title=$title;
        $this->year=$year;
        $this->length=$length;
        $this->moviedescription=$moviedescription;    
        $this->movielink=$movielink;
        
        $this->dbconn=$this->connectDB();
    }

    public function getId(){
        return $this->id;
    }

    public function setImage($image){
        $this->image=$image;
    }
    public function getImage(){
        return $this->image;
    }
    public function setTitle($title){
        $this->title=$title;
    }
    public function getTitle(){
        return $this->title;
    }
    public function setYear($year){
        $this->year=$year;
    }
    public function getYear(){
        return $this->year;
    }
    public function setLength($length){
        $this->length=$length;
    }
    public function getLength(){
        return $this->length;
    }
    public function setMoviedescription($moviedescription){
        $this->moviedescription=$moviedescription;
    }
    public function getMoviedescription(){
        return $this->moviedescription;
    }

    public function setMovielink($movielink){
        $this->movielink=$movielink;
    }
    public function getMovielink(){
        return $this->movielink;
    }

    public function setGenre_id($genre_id){
        $this->genre_id=$genre_id;
    }
    public function getGenre_id(){
        return $this->genre_id;
    }

    public function insertMovies(){
        $sql="INSERT INTO movies (id,genre_id,image,title,moviedescription,movielink,year,length) VALUES (:id,:genre_id,:image,:title,:moviedescription,:movielink,:year,:length)";
    
        $stm=$this->dbconn->prepare($sql);
        $stm->bindParam('id',$this->id);
        $stm->bindParam(':genre_id',$this->genre_id);
        $stm->bindParam(':image',$this->image);
        $stm->bindParam(':title',$this->title);
        $stm->bindParam(':moviedescription',$this->moviedescription);
        $stm->bindParam(':movielink',$this->movielink);
        $stm->bindParam(':year',$this->year);
        $stm->bindParam(':length',$this->length);

        $stm->execute();
    }

    public function getMovies(){
        $sql="SELECT * FROM movies";
        $stm=$this->dbconn->prepare($sql);
        $stm->execute();
        $movies=$stm->fetchAll(PDO::FETCH_ASSOC);
        return $movies;
    }

    
    public function getMoviesById($id){

        $sql = "SELECT * from movies WHERE id = '$id'";
        $stm=$this->dbconn->prepare($sql);

        $stm->execute();
        $movies = $stm->fetch();

        return $movies;
    }

    public function updateMovie($id,$image,$title,$year,$length,$moviedescription,$movielink){
        $sql = "UPDATE movies SET image=?,title=?, moviedescription=?,movielink=?, year=?, length=? WHERE id=?";

        $stm=$this->dbconn->prepare($sql);

        $stm->execute([$image, $title, $moviedescription,$movielink, $year, $length ,$id]);

        echo  "<script>alert('Update was successful')</script>";
    }

    public function deleteMovie($id){
        
        $sql = "DELETE FROM movies WHERE id=?";

        $stm=$this->dbconn->prepare($sql);

        $stm->execute([$id]);

        echo "<script>alert('Delete was successful')</script>";
    }


}


?>