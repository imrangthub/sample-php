<?php
namespace App\Bitm\Seip113827\Mobile;

class mobiles{
    public $id='';
    public $title='';
    public $conn='';

    public  function __construct()
    {
        $this->conn=mysqli_connect("localhost","root","");
        mysqli_select_db($this->conn,"allcruddb");

    }


   public function prepar($data=''){
       if(isset($data)&& !empty($data)){
           $this->title=$data["title"];
       }
       if(isset($data)&& !empty($data)){
           $this->id=$data["id"];
       }
   }

    public function storeData(){
        if(!empty($this->title)){
            $myQuery="INSERT INTO `mobiles` (`title`) VALUES ('".$this->title."');";
            mysqli_query($this->conn,$myQuery);
            session_start();
            $_SESSION['massege']="Data successfully Inserted.";
            header("location:create.php");
        }else{
            session_start();
            $_SESSION['massege']="Data not Inserted.";
            header("location:create.php");
        }
    }
    public function index(){
        $allData=array();
        $myQuery="SELECT * FROM `mobiles` WHERE `deleted_at` IS NULL";
        $result= mysqli_query($this->conn,$myQuery);
//        $oneData=mysqli_fetch_assoc($result);
//        return $oneData;
        while($oneData=mysqli_fetch_assoc($result)){
            $allData[]=$oneData;
        }
        return $allData;
    }
    public function singleShow($id=''){
        $this->id=$id;
        $myQuery=" SELECT * FROM `mobiles` WHERE id='".$this->id."'";
        $result=mysqli_query($this->conn,$myQuery);
        $row=mysqli_fetch_assoc($result);
        return $row;
//        SELECT * FROM `mobiles` WHERE id=5
    }
    public function deleted($id=''){
        session_start();
        $this->id=$id;
        $myQuery="DELETE FROM `mobiles` WHERE id='".$this->id."'";
        mysqli_query($this->conn,$myQuery);
        header("location:trashed.php");
        $_SESSION["massege"]="Successfully deleted";
    }
    public function trash($id=''){
          $this->id=$id;
            $myQuery = "UPDATE `mobiles` SET `deleted_at` = '".date('Y-m-m')."' WHERE `mobiles`.`id` = $this->id;";
            mysqli_query($this->conn, $myQuery);
        header("location:index.php");

    }
    public function recover($id=''){
        $this->id=$id;
        $myQuery = "UPDATE `mobiles` SET `deleted_at` =NULL WHERE `mobiles`.`id` = $this->id;";
        mysqli_query($this->conn, $myQuery);
        header("location:trashed.php");

    }
    public function update(){
        if(!empty($this->title)){
            $myQuery="UPDATE `mobiles` SET `title` = '".$this->title."' WHERE `mobiles`.`id` = $this->id;";
            mysqli_query($this->conn,$myQuery);
            session_start();
            $_SESSION['massege']="Data successfully Update.";
            header("location:index.php");
        }else{
            session_start();
            $_SESSION['massege']="Data not Update.";
            header("location:index.php");
        }

    }
    public function trashed(){
        $allData=array();
        $myQuery="SELECT * FROM `mobiles` WHERE `deleted_at` IS NOT NULL";
        $result= mysqli_query($this->conn,$myQuery);
//        $oneData=mysqli_fetch_assoc($result);
//        return $oneData;
        while($oneData=mysqli_fetch_assoc($result)){
            $allData[]=$oneData;
        }
        return $allData;

    }






}

