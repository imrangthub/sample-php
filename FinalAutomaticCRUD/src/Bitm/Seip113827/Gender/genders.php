<?php
namespace App\Bitm\Seip113827\Gender;

class genders{
    public $id = '';
    public $title = '';
    public $gender = '';
    public $conn = '';


    public function  __construct()
    {
        if ($this->conn = mysqli_connect("localhost", "root", "")) {
            if (mysqli_select_db($this->conn, "allcruddb")) {
//               echo "Database Connection Successfull";
            }
        } else {
            echo "Database Connection faild";
        }
    }

    public function prepar($data = '')
    {
        if (isset($data) && !empty($data)) {
            $this->id=$data["id"];
            $this->title = $data["title"];
            $this->gender=$data["gender"];


        }
    }
    public function storeData(){
        if(!empty($this->title)&&($this->gender)){
            $myQuery="INSERT INTO `genders` (`title`, `gender`) VALUES ('".$this->title."','".$this->gender."')";
//                "INSERT INTO `books` (title`, `writer`) VALUES ('".$this->title."','".$this->writer."');";
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
        $myQuery="SELECT * FROM `genders` WHERE `deleted_at` IS NULL";
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
        $myQuery=" SELECT * FROM `genders` WHERE id='".$this->id."'";
        $result=mysqli_query($this->conn,$myQuery);
        $row=mysqli_fetch_assoc($result);
        return $row;
    }

    public function update(){
        $myQuery="UPDATE `genders` SET `title` = '".$this->title."', `gender` = '".$this->gender."' WHERE `genders`.`id` =". $this->id;
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
        $myQuery = "UPDATE `genders` SET `deleted_at` = '".date('Y-m-m')."' WHERE `genders`.`id` = $this->id;";
        mysqli_query($this->conn, $myQuery);
        header("location:index.php");

    }
    public function trashed(){
        $allData=array();
        $myQuery="SELECT * FROM `genders` WHERE `deleted_at` IS NOT NULL";
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
        $myQuery = "UPDATE `genders` SET `deleted_at` = NULL WHERE `genders`.`id` = $this->id;";
        mysqli_query($this->conn, $myQuery);
        header("location:trashed.php");

    }

    public function deleted($id=''){
        session_start();
        $this->id=$id;
        $myQuery="DELETE FROM `genders` WHERE id='".$this->id."'";
        mysqli_query($this->conn,$myQuery);
        header("location:trashed.php");
        $_SESSION["massege"]="Successfully deleted";
    }

}