<?php
class books{
    public $id='';
    public $title='';
    public $authority='';
    public $conn='';

    public function __construct(){
        if($this->conn=mysqli_connect("localhost","root","")){
            if(mysqli_select_db($this->conn,"allcrud")){
                //echo "Successfully Instalt database.";
            }else{
                echo "Database connection failed.";
            }
        }
       }
    public function prepar($data=''){
        if(isset($data) && !empty($data)){
            $this->id=$data["id"];
            $this->title=$data["title"];
            $this->authority=$data["authority"];
        }

    }
    public function storeData(){
        if(!empty($this->title) && ($this->authority)){
            $storeQuery="INSERT INTO `books` (`title`,`authority`) VALUE ('".$this->title."','".$this->authority."')";
//            echo $storeQuery;
//            die();
            mysqli_query($this->conn,$storeQuery);
            session_start();
            $_SESSION['msgStore']="Data Inserted.";
            header("location:edit.php");
        }else{
            session_start();
            $_SESSION['msgStore']="Data Insertion failed.";
            header("location:edit.php");
        }
    }
    public function index(){
        $allData=array();
        $getAllDataQuery="SELECT * FROM `books` WHERE `deleted_at` IS NUll";
        $result=mysqli_query($this->conn,$getAllDataQuery);
        while($oneData=mysqli_fetch_assoc($result)){
            $allData[]=$oneData;
        }
        return $allData;
    }
    public function singleData($id=''){
        $this->id=$id;
        $getSingleDataQuery="SELECT *FROM `books` WHERE id='".$this->id."'";
        $result=mysqli_query($this->conn,$getSingleDataQuery);
        $row=mysqli_fetch_assoc($result);
        return $row;
    }
    public function update(){
        $updateQuery="UPDATE `books` SET `title`='".$this->title."',`authority`='".$this->authority."' WHERE `books`.`id`=$this->id;";
        if(mysqli_query($this->conn,$updateQuery)){
            session_start();
            $_SESSION['msgUpdate']="successfully update.";
        }else{
            $_SESSION['msgUpdate']="Update failed";
        }
        header("location:index.php");
    }
    public function trash($id=''){
        $this->id=$id;
        $trashQuery="UPDATE `books` SET `deleted_at`='".date('Y-m-m')."' WHERE `books`.`id`=$this->id;";
        mysqli_query($this->conn,$trashQuery);
        header('location:index.php');
    }
    public function trshed(){
        $allData=array();
        $trshedQuery="SELECT * FROM `books` WHERE `deleted_at` IS NOT NULL";
        $result=mysqli_query($this->conn,$trshedQuery);
        while($oneData=mysqli_fetch_assoc($result)){
            $allData[]=$oneData;
        }
        return $allData;
    }
    public function recover($id=''){
        $this->id=$id;
        $recoverQuery="UPDATE `books` SET `deleted_at`=NULl WHERE `books`.`id`=$this->id;";
        mysqli_query($this->conn,$recoverQuery);
        header("location:trashed.php");
    }
    public function deleted($id=''){
        $this->id=$id;
        $deletedQuery="DELETE FROM `books` WHERE `books`.`id`=$this->id;";
        mysqli_query($this->conn,$deletedQuery);
        header("location:trashed.php");
    }




}