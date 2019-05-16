<?php
namespace App\Bitm\Seip113827\Birthday;

class birthdays{
    public $id = '';
    public $title = '';
    public $birthday = '';
    public $conn = '';


    public function  __construct()
    {
        if ($this->conn = mysqli_connect("localhost", "root", "")) {
            if (mysqli_select_db($this->conn, "allcruddb")) {
//                echo "Database Connection Successfull";
            }
        } else {
            echo "Database Connection faild";
        }
    }

    public function prepar($data=''){
        if(isset($data)&& !empty($data)){
            $this->id=$data["id"];
            $this->title=$data["title"];
            $this->birthday=$data["birthday"];
        }
    }
    public function storeData(){
        if(!empty($this->title)&&($this->birthday)){
            $myQuery="INSERT INTO `birthday` (`title`, `birthday`) VALUES ('".$this->title."','".$this->birthday."')";
            mysqli_query($this->conn,$myQuery);
            session_start();
            $_SESSION['massege']="Data Inserted.";
            header("location:create.php");
        }else{
            session_start();
            $_SESSION['massege']="Data Insertion faild.";
            header("location:create.php");
        }
    }
    public function index(){
        $allData=array();
        $myQuery="SELECT * FROM `birthday` WHERE `deleted_at` IS NULL";
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
        $myQuery=" SELECT * FROM `birthday` WHERE id='".$this->id."'";
        $result=mysqli_query($this->conn,$myQuery);
        $row=mysqli_fetch_assoc($result);
        return $row;
//        SELECT * FROM `mobiles` WHERE id=5
    }
    public function update(){
        $myQuery="UPDATE `birthday` SET `title` = '".$this->title."',`birthday` = '".$this->birthday."' WHERE `birthday`.`id` =$this->id";
        if(mysqli_query($this->conn,$myQuery)) {

            session_start();
            $_SESSION['massege'] = "Data successfully Update.";
            header("location:index.php");
        }else {
            session_start();
            $_SESSION['massege'] = "Data not Update.";
            header("location:index.php");
        }

    }
    public function trash($id=''){
        $this->id=$id;
        $myQuery = "UPDATE `birthday` SET `deleted_at` = '".date('Y-m-m')."' WHERE `birthday`.`id` = $this->id;";
        mysqli_query($this->conn, $myQuery);
        header("location:index.php");

    }
    public function trashed(){
        $allData=array();
        $myQuery="SELECT * FROM `birthday` WHERE `deleted_at` IS NOT NULL";
        $result= mysqli_query($this->conn,$myQuery);
//        $oneData=mysqli_fetch_assoc($result);
//        return $oneData;
        while($oneData=mysqli_fetch_assoc($result)){
            $allData[]=$oneData;
        }
        return $allData;

    }
    public function recover($id=''){
        $this->id=$id;
        $myQuery = "UPDATE `birthday` SET `deleted_at` = NULL WHERE `birthday`.`id` = $this->id;";
        mysqli_query($this->conn, $myQuery);
        header("location:trashed.php");

    }

    public function deleted($id=''){
        session_start();
        $this->id=$id;
        $myQuery="DELETE FROM `birthday` WHERE id='".$this->id."'";
        mysqli_query($this->conn,$myQuery);
        header("location:trashed.php");
        $_SESSION["massege"]="Successfully deleted";
    }

}
    ?>