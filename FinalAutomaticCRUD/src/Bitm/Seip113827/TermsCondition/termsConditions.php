<?php
namespace App\Bitm\Seip113827\TermsCondition;

class termsConditions
{
    public $id = '';
    public $title = '';
    public $conditionAggery = '';
    public $conn = '';
//    public $hobby = '';

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
            $this->title = $data["title"];
            $this->conditionAggery = $data["conditionAggery"];
            $this->id = $data["id"];
        }
    }
    public function storeData(){
        if(!empty($this->title)&&($this->conditionAggery)){
            $myQuery="INSERT INTO `termsConditions` (`title`, `conditionAggery`) VALUES ('".$this->title."','".$this->conditionAggery."')";
            mysqli_query($this->conn,$myQuery);
            session_start();
            $_SESSION['massage']="Data Inserted.";
            header("location:create.php");
        }else{
            session_start();
            $_SESSION['massage']="Data Insertion faild.";
            header("location:create.php");
        }
    }
    public function index(){
        $allData=array();
        $myQuery="SELECT * FROM `termsConditions` WHERE `deleted_at` IS NULL";
        $result= mysqli_query($this->conn,$myQuery);
        while($oneData=mysqli_fetch_assoc($result)){
            $allData[]=$oneData;
        }
        return $allData;
    }
    public function singleShow($id=''){
        $this->id=$id;
        $myQuery=" SELECT * FROM `termsConditions` WHERE id='".$this->id."'";
        $result=mysqli_query($this->conn,$myQuery);
        $row=mysqli_fetch_assoc($result);
        return $row;
    }

    public function update(){
        $myQuery="UPDATE `termsConditions` SET `title` = '".$this->title."', `conditionAggery` = '".$this->conditionAggery."' WHERE `termsConditions`.`id` =". $this->id;
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
        $myQuery = "UPDATE `termsConditions` SET `deleted_at` = '".date('Y-m-m')."' WHERE `termsConditions`.`id` = $this->id;";
        mysqli_query($this->conn, $myQuery);
        header("location:index.php");

    }
    public function trashed(){
        $allData=array();
        $myQuery="SELECT * FROM `termsConditions` WHERE `deleted_at` IS NOT NULL";
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
        $myQuery = "UPDATE `termsConditions` SET `deleted_at` = NULL WHERE `termsConditions`.`id` = $this->id;";
        mysqli_query($this->conn, $myQuery);
        header("location:trashed.php");

    }

    public function deleted($id=''){
        session_start();
        $this->id=$id;
        $myQuery="DELETE FROM `termsConditions` WHERE id='".$this->id."'";
        mysqli_query($this->conn,$myQuery);
        header("location:trashed.php");
        $_SESSION["massege"]="Successfully deleted";
    }







}
?>