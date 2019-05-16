<?php
namespace App\Bitm\Seip113827\Email;

class emails
{
    public $id = '';
    public $title = '';
    public $email = '';
    public $conn = '';


    public function  __construct()
    {
        if ($this->conn = mysqli_connect("localhost", "root", "")) {
            if (mysqli_select_db($this->conn, "allcruddb")) {
  //              echo "Database Connection Successfull";
            }
        } else {
            echo "Database Connection faild";
        }
    }

    public function prepar($data = '')
    {
        if (isset($data) && !empty($data)) {
            $this->id = $data["id"];
            $this->title = $data["title"];
            $this->email = $data["email"];
        }
    }
    public function storeData(){
        if(!empty($this->title)&&($this->email)){
            $myQuery="INSERT INTO `emails` (`title`, `email`) VALUES ('".$this->title."','".$this->email."')";
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
        $myQuery="SELECT * FROM `emails` WHERE `deleted_at` IS NULL";
        $result= mysqli_query($this->conn,$myQuery);
        while($oneData=mysqli_fetch_assoc($result)){
            $allData[]=$oneData;
        }
        return $allData;
    }
    public function singleShow($id=''){
        $this->id=$id;
        $myQuery=" SELECT * FROM `emails` WHERE id='".$this->id."'";
        $result=mysqli_query($this->conn,$myQuery);
        $row=mysqli_fetch_assoc($result);
        return $row;
    }
    public function update(){
        $myQuery="UPDATE `emails` SET `title` = '".$this->title."',`email` = '".$this->email."' WHERE `emails`.`id` =$this->id";
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
        $myQuery = "UPDATE `emails` SET `deleted_at` = '".date('Y-m-m')."' WHERE `emails`.`id` = $this->id;";
        mysqli_query($this->conn, $myQuery);
        header("location:index.php");

    }
    public function trashed(){
        $allData=array();
        $myQuery="SELECT * FROM `emails` WHERE `deleted_at` IS NOT NULL";
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
        $myQuery = "UPDATE `emails` SET `deleted_at` = NULL WHERE `emails`.`id` = $this->id;";
        mysqli_query($this->conn, $myQuery);
        header("location:trashed.php");

    }

    public function deleted($id=''){
        session_start();
        $this->id=$id;
        $myQuery="DELETE FROM `emails` WHERE id='".$this->id."'";
        mysqli_query($this->conn,$myQuery);
        header("location:trashed.php");
        $_SESSION["massege"]="Successfully deleted";
    }






}
?>