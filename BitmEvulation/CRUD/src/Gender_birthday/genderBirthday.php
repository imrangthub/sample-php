<?php
class genderBirthday{
    public $id='';
    public $title='';
    public $birthday='';
    public $gender='';
    public $conn='';

    public function __construct(){
        $this->conn=mysqli_connect("localhost","root","");
        mysqli_select_db($this->conn,"allcrud");
    }

    public function preparer($data=''){
        if(isset($data) && !empty($data)) {
            $this->id = $data['id'];
            $this->title=$data['title'];
            $this->birthday=$data['birthday'];
            $this->gender=$data['gender'];
        }
    }
    public function storeData(){
       if(!empty($this->title) && !empty($this->birthday) && !empty($this->gender)){
          $storeQuery="INSERT INTO `gender_birthday`(`title`,`birthday`,`gender`) VALUE ('".$this->title."','".$this->birthday."','".$this->gender."')";
           mysqli_query($this->conn,$storeQuery);
           session_start();
           $_SESSION['msgStore']='Data successfully store.';
           header('location:edit.php');
       }else{
           session_start();
           $_SESSION['msgStore']='Data insertion failed.';
           header('location:edit.php');
       }

    }
    public function index(){
        $allData=array();
        $getAllDataQuery="SELECT * FROM `gender_birthday` WHERE `deleted_at` IS NULL";
        $tempResult=(mysqli_query($this->conn,$getAllDataQuery));
        while($oneData=mysqli_fetch_assoc($tempResult)){
            $allData[]=$oneData;
        }
        return $allData;
    }
    public function singleShow($id=''){
        if(isset($id) && !empty($id)){
            $this->id=$id;
            $getSingleDataQuery="SELECT * FROM `gender_birthday` WHERE `id`='".$this->id."'";
            $tempResult=mysqli_query($this->conn,$getSingleDataQuery);
            $row=mysqli_fetch_assoc($tempResult);
            return $row;
        }
    }
    public function update(){
        $updateQuery="UPDATE `gender_birthday` SET `title`='".$this->title."',`birthday`='".$this->birthday."',`gender`='".$this->gender."' WHERE `gender_birthday`.`id`=$this->id;";
        if(mysqli_query($this->conn,$updateQuery)){
            session_start();
            $_SESSION['msgUpdate']="successfully Update.";
        }else{
            session_start();
            $_SESSION['msgUpdate']="Update failed";
        }
        header('location:index.php');
    }
    public function trash($id=''){
        $this->id=$id;
        $trashQuery="UPDATE `gender_birthday` SET `deleted_at`='".date('Y-m-m')."' WHERE `gender_birthday`.`id`=$this->id;";
        mysqli_query($this->conn,$trashQuery);
        header('location:index.php');
    }
    public function trashed(){
        $allData=array();
        $trashedQuery="SELECT * FROM `gender_birthday` WHERE `deleted_at` IS NOT NULL;";
        $tempResult=mysqli_query($this->conn,$trashedQuery);
        while($oneData=mysqli_fetch_assoc($tempResult)){
            $allData[]=$oneData;
        }
        return $allData;
    }
    public function recover($id=''){
        $this->id=$id;
        $recoverQuery="UPDATE `gender_birthday` SET `deleted_at`=NULL WHERE `gender_birthday`.`id`=$this->id;";
        mysqli_query($this->conn,$recoverQuery);
        header('location:trashed.php');
    }
    public function delete($id=''){
        $this->id=$id;
        $deleteQuery="DELETE FROM `gender_birthday` WHERE `gender_birthday`.`id`=$this->id;";
        mysqli_query($this->conn,$deleteQuery);
        header('location:trashed.php');
    }
    public function makeProfileData($id=''){
        $this->id=$id;
        $unsetProfileDataQuery="UPDATE `gender_birthday` SET `profilesflag`=NUll;";
        mysqli_query($this->conn,$unsetProfileDataQuery);
        $setProfileDataQuery="UPDATE `gender_birthday` SET `profilesflag`=1 WHERE `gender_birthday`.`id`='".$this->id."';";
        mysqli_query($this->conn,$setProfileDataQuery);
        header('location:index.php');
    }



}