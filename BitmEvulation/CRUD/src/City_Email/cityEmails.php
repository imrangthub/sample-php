<?php
class cityEmails{
    public $id='';
    public $title='';
    public $email='';
    public $city='';
    public $conn='';

    public function __construct(){
        $this->conn=mysqli_connect("localhost","root","");
        mysqli_select_db($this->conn,"allcrud");
    }

    public function preparer($data=''){
        if(isset($data) && !empty($data)) {
            $this->id = $data['id'];
            $this->title=$data['title'];
            $this->email=$data['email'];
            $this->city=$data['city'];
        }
    }
    public function storeData(){
        if(!empty($this->title) && !empty($this->email) && !empty($this->city)){
            $storeQuery="INSERT INTO `city_emails` (`title`, `emails`, `citys`) VALUES ('".$this->title."', '".$this->email."', '".$this->city."');";
            mysqli_query($this->conn,$storeQuery);
            session_start();
            $_SESSION['msgStore']='Data successfully store.';
            header('location:edit.php');
        }else{
            session_start();
            $_SESSION['msgStore']='Data insertion failedxxxx.';
            header('location:edit.php');
        }
    }
    public function index(){
        $allData=array();
        $getAllData="SELECT * FROM `city_emails` WHERE `deleted_at` IS NULL";
        $tempResult=mysqli_query($this->conn,$getAllData);
        while($oneData=mysqli_fetch_assoc($tempResult)){
           $allData[]=$oneData;
        }
        return $allData;
    }
    public function singleShow($id=''){
        $this->id=$id;
        $getSingleData="SELECT * FROM `city_emails` WHERE id='".$this->id."'";
        $tempResult=mysqli_query($this->conn,$getSingleData);
        $row=mysqli_fetch_assoc($tempResult);
        return $row;
    }
    public function update(){
        $updateQuery="UPDATE `city_emails` SET `title`='".$this->title."',`emails`='".$this->email."',`citys`='".$this->city."' WHERE `city_emails`.`id`=$this->id;";
        if(mysqli_query($this->conn,$updateQuery)){
            session_start();
            $_SESSION['msgUpdate']="successfully Update.";
        }else{
            session_start();
            $_SESSION['msgUpdate']="Update failed.";
        }
        header('location:index.php');
    }
    public function trash($id=''){
        $this->id=$id;
        $trashQuery="UPDATE `city_emails` SET `deleted_at`='".date('Y-m-m')."' WHERE `city_emails`.`id`=$this->id;";
        mysqli_query($this->conn,$trashQuery);
        header('location:index.php');
    }
    public function trashed(){
        $allData=array();
        $getAllData="SELECT * FROM `city_emails` WHERE `deleted_at` IS NOT NULL;";
        $tempResult=mysqli_query($this->conn,$getAllData);
        while($oneData=mysqli_fetch_assoc($tempResult)){
            $allData[]=$oneData;
        }
        return $allData;
    }
    public function recover($id=''){
        $this->id=$id;
        $recoverQuery="UPDATE `city_emails` SET `deleted_at`=NULL WHERE `city_emails`.`id`=$this->id;";
        mysqli_query($this->conn,$recoverQuery);
        header('location:trashed.php');
    }
    public function delete($id=''){
        $this->id=$id;
        $deletedQuery="DELETE FROM `city_emails` WHERE `city_emails`.`id`=$this->id;";
        mysqli_query($this->conn,$deletedQuery);
        header('location:trashed.php');
    }


}