<?php
class summaryHobbyCondition{
    public $id='';
    public $title='';
    public $hobby='';
    public $summary='';
    public $condition_at='';
    public $conn='';

    public function __construct(){
        $this->conn=mysqli_connect("localhost","root","");
        mysqli_select_db($this->conn,"allcrud");
    }

    public function preparer($data=''){
        if(isset($data) && !empty($data)){
            $this->id=$data['id'];
            $this->title=$data['title'];
            $this->hobby=$data['hobby'];
            $this->summary=$data['summary'];
            $this->condition_at=$data['condition'];
        }
    }
    public function storeData(){
        if(!empty($this->title) && !empty($this->hobby) && !empty($this->summary) && !empty($this->condition_at)){
            $storeDataQuery="INSERT INTO `summary_hobby_condition`(`title`,`hobby`,`summary`,`condition_at`) VALUE ('".$this->title."','".$this->hobby."','".$this->summary."','".$this->condition_at."');";
            mysqli_query($this->conn,$storeDataQuery);
            session_start();
            $_SESSION['msgStore']="successfully data Inserted.";
        }else{
            session_start();
            $_SESSION['msgStore']="Insertion failed.";
        }
        header('location:create.php');
    }
    public function index(){
        $allData=array();
        $getAllDataQuery="SELECT * FROM `summary_hobby_condition` WHERE `deleted_at` IS NULL;";
        $tempResult=mysqli_query($this->conn,$getAllDataQuery);
        while($oneData=mysqli_fetch_assoc($tempResult)){
            $allData[]=$oneData;
        }
        return $allData;
    }
    public function singleData($id=''){
        $this->id=$id;
        $singleDataQuery="SELECT * FROM `summary_hobby_condition` WHERE `id`='".$this->id."'";
        $tempResult=mysqli_query($this->conn,$singleDataQuery);
        $row=mysqli_fetch_assoc($tempResult);
        return $row;
    }
   public function update(){
       $updateQuery="UPDATE `summary_hobby_condition` SET `title`='".$this->title."',`hobby`='".$this->hobby."',`summary`='".$this->summary."',`condition_at`='".$this->condition_at."' WHERE `summary_hobby_condition`.`id`=$this->id;";
      if( mysqli_query($this->conn,$updateQuery)){
           session_start();
          $_SESSION['msgUpdate']="successfully Updated.";
       }else{
          session_start();
          $_SESSION['msgUpdate']="Update failed.";
      }
       header('location:index.php');
   }
    public function trash($id=''){
        $this->id=$id;
        $trashQuery="UPDATE `summary_hobby_condition` SET `deleted_at`='".date(Y-m-m)."' WHERE `summary_hobby_condition`.`id`=$this->id;";
        mysqli_query($this->conn,$trashQuery);
        header('location:index.php');
    }
    public function trashed(){
        $allData=array();
        $getAllData="SELECT * FROM `summary_hobby_condition` where `deleted_at` IS NOT NULL;";
        $tempResult=(mysqli_query($this->conn,$getAllData));
        while($oneData=mysqli_fetch_assoc($tempResult)){
            $allData[]=$oneData;
        }
        return $allData;
    }
    public function recovery($id=''){
        $this->id=$id;
        $recoveryQuery="UPDATE `summary_hobby_condition` SET `deleted_at`=NULL WHERE `summary_hobby_condition`.`id`=$this->id;";
        mysqli_query($this->conn,$recoveryQuery);
        header('location:trashed.php');
    }
    public function delete($id=''){
        $this->id=$id;
        $deletedQuery="DELETE FROM `summary_hobby_condition` WHERE `summary_hobby_condition`.`id`=$this->id;";
        mysqli_query($this->conn,$deletedQuery);
        header('location:trashed.php');
    }




}