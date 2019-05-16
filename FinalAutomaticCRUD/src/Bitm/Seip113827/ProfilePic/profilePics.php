<?php
namespace App\Bitm\Seip113827\ProfilePic;

class profilePics{
    public $id = '';
    public $title = '';
    public $conn = '';
    public $imaName='';
    public $imaNameTime='';
    public $tmpName='';
    public $profileImg='';

    public function __construct()
    {
        $this->conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($this->conn, "allcruddb");

    }


    public function prepar($data = '',$imgData='')
    {
        if (isset($data) && !empty($data)) {
            $this->title = $data["title"];
        }
        if (isset($data) && !empty($data)) {
            $this->id = $data["id"];
        }
        if (isset($imgData) && !empty($imgData)) {
            $this->imaName=$imgData['profilepic']['name'];
        }
        if (isset($imgData) && !empty($imgData)) {
            $this->tmpName=$imgData['profilepic']['tmp_name'];

        }
    }

    public function storeData(){
        session_start();
        $acceptExt=array('jpg','jpeg','png');
        $fileExtAr=explode('.', $this->imaName);
        $fileExt=end($fileExtAr);

        if(in_array($fileExt, $acceptExt))
        {
            $this->imaNameTime=time().$this->imaName;
        }
          echo $this->imaNameTime;

        if(!empty($this->title) && !empty($this->imaNameTime)){
            $myQuery="INSERT INTO `profilepic` (`title`,`profilepic`) VALUES ('".$this->title."','".$this->imaNameTime."')";
            if(mysqli_query($this->conn,$myQuery)) {
                move_uploaded_file($this->tmpName,"../../../../img/".$this->imaNameTime);

                $_SESSION['massege']="Data successfully Inserted.";
                header("location:create.php");
            }
        }else{
            session_start();
            $_SESSION['massege']="Data not Inserted.";
            header("location:create.php");
        }
    }
    public function index(){
        $allData=array();
        $myQuery="SELECT * FROM `profilepic` WHERE `deleted_at` IS NULL";
        $result= mysqli_query($this->conn,$myQuery);
        while($oneData=mysqli_fetch_assoc($result)){
            $allData[]=$oneData;
        }
        return $allData;
    }
    public function singleShow($id=''){
        $this->id=$id;
        $myQuery=" SELECT * FROM `profilepic` WHERE id='".$this->id."'";
        $result=mysqli_query($this->conn,$myQuery);
        $row=mysqli_fetch_assoc($result);
        return $row;
    }
    public function update(){
        session_start();
        $acceptExt=array('jpg','jpeg','png');
        $fileExtAr=explode('.', $this->imaName);
        $fileExt=end($fileExtAr);

        if(in_array($fileExt, $acceptExt))
        {
            $this->imaNameTime=time().$this->imaName;
        }
        echo $this->imaNameTime;

        if(!empty($this->title) && !empty($this->imaNameTime)){
            $myQuery="UPDATE `profilepic` SET `title` = '".$this->title."', `profilepic` = '".$this->imaNameTime."' WHERE `profilepic`.`id` =". $this->id;
            if(mysqli_query($this->conn,$myQuery)) {
                move_uploaded_file($this->tmpName,"../../../../img/".$this->imaNameTime);

                $_SESSION['massege']="Data successfully update.";
                header("location:create.php");
            }
        }else{
            session_start();
            $_SESSION['massege']="Data not Inserted.";
            header("location:create.php");
        }
    }
    public function trash($id=''){
        $this->id=$id;
        $myQuery = "UPDATE `profilepic` SET `deleted_at` = '".date('Y-m-m')."' WHERE `profilepic`.`id` = $this->id;";
        mysqli_query($this->conn, $myQuery);
        header("location:index.php");

    }
    public function trashed(){
        $allData=array();
        $myQuery="SELECT * FROM `profilepic` WHERE `deleted_at` IS NOT NULL";
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
        $myQuery = "UPDATE `profilepic` SET `deleted_at` = NULL WHERE `profilepic`.`id` = $this->id;";
        mysqli_query($this->conn, $myQuery);
        header("location:trashed.php");

    }



    public function deleted($id=''){
        session_start();
        $this->id=$id;
        $myQuery="DELETE FROM `profilepic` WHERE id='".$this->id."'";
        mysqli_query($this->conn,$myQuery);
        header("location:trashed.php");
        $_SESSION["massege"]="Successfully deleted";

    }


        public function setProfilePic($id='')
    {
        $query1= "UPDATE `profilepic` set `flag`= NULL ";
        mysqli_query($this->conn,$query1);
        $query2 = "UPDATE `profilepic` set `flag`=1 WHERE `id` = '".$id."'    " ;
        mysqli_query($this->conn,$query2);
        header("location:index.php");
    }
    public function showProfilePic(){
        $allData=array();
        $myQuery="SELECT * FROM `profilepic` WHERE `flag` IS NOT NULL";
        $result= mysqli_query($this->conn,$myQuery);
        while($oneData=mysqli_fetch_assoc($result)){
            $allData[]=$oneData;
        }
        return $allData;
    }


}