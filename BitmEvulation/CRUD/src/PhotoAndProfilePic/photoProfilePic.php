<?php
class photoProfilePic{
    public $id='';
    public $title='';
    public $imgName='';
    public $imgNameTile='';
    public $tempName='';
    public $profilePic='';
    public $conn='';

    public function __construct(){
        $this->conn=mysqli_connect("localhost","root","");
        mysqli_select_db($this->conn,"allcrud");
    }

    public function preparer($data='',$imgData=''){
        if(isset($data) && !empty($data)){
            $this->title=$data['title'];
            $this->id=$data['id'];
        }
        if(isset($imgData) && !empty($imgData)){
            $this->imgName=$imgData['myPhoto']['name'];
            $this->tempName=$imgData['myPhoto']['tmp_name'];
        }

    }
    public function storeData(){
        $acceptExtensions=array('JPG','jpg','jpeg','png');
        $fileExp=explode('.',$this->imgName);
//        print_r($fileExp);
        $currentExtension=end($fileExp);
        if(in_array($currentExtension,$acceptExtensions)){
            $this->imgNameTile=time().$this->imgName;
        }
        if(!empty($this->title) && !empty($this->imgNameTile)){
            $storeQuery="INSERT INTO `photos` (`title`,`pics`) VALUES ('".$this->title."','".$this->imgNameTile."');";
            if(mysqli_query($this->conn,$storeQuery)){
                move_uploaded_file($this->tempName,"../../imgfiles/".$this->imgNameTile);
                session_start();
                $_SESSION['msgStore']="Data successfully Inserted.";;
            }else{
                session_start();
                $_SESSION['msgStore']="Data not Inserted.";
            }
        }
        header("location:create.php");
    }
    public function index(){
        $allData=array();
        $getAllData="SELECT * FROM `photos` where `deleted_at` IS NULL";
        $tempResult=mysqli_query($this->conn,$getAllData);
        while($oneData=mysqli_fetch_assoc($tempResult)){
            $allData[]=$oneData;
        }
        return $allData;
    }
    public function singleData($id=''){
        $this->id=$id;
        $getSingleDataQuery="SELECT * FROM `photos` WHERE `id`='".$this->id."';";
        $tempResult=mysqli_query($this->conn,$getSingleDataQuery);
        $row=mysqli_fetch_assoc($tempResult);
        return $row;
    }
    public function update(){
        $acceptExtension=array('jpg','jpeg','png');
        $fileExpl=explode('.',$this->imgName);
        $currentPicExtension=end($fileExpl);
        if(in_array($currentPicExtension,$acceptExtension)){
            $this->imgNameTile=time().$this->imgName;
        }
        if(!empty($this->title) && !empty($this->imgNameTile)){
            $updateQuery="UPDATE `photos` SET `title`='".$this->title."',`pics`='".$this->imgNameTile."' WHERE `photos`.`id`='".$this->id."';";
            if(mysqli_query($this->conn,$updateQuery)){
                move_uploaded_file($this->tempName,"../../imgfiles/".$this->imgNameTile);
                session_start();
                $_SESSION['msgUpdate']="Data successfully Update.";;
            }else{
                session_start();
                $_SESSION['msgUpdate']="Data not update.";

            }
        }
        header('location:index.php');
    }
    public function trash($id=''){
        $this->id=$id;
        $trashQuery="UPDATE `photos` SET `deleted_at`='".date(Y-m-m)."' WHERE `photos`.`id`='".$this->id."';";
        mysqli_query($this->conn,$trashQuery);
        header('location:index.php');
    }
    public function trashed(){
        $allData=array();
        $getAllData="SELECT * FROM `photos` WHERE `deleted_at` IS NOT NULL;";
        $tempResult=(mysqli_query($this->conn,$getAllData));
        while($oneData=mysqli_fetch_assoc($tempResult)){
            $allData[]=$oneData;
        }
        return $allData;
    }
    public function recover($id=''){
        $this->id=$id;
        $recoverQuery="UPDATE `photos` SET `deleted_at`=NULL WHERE `photos`.`id`='".$this->id."';";
        mysqli_query($this->conn,$recoverQuery);
        header('location:trashed.php');
    }
    public function delete($id='',$name=''){
        $this->id=$id;
        $this->imgNameTile=$name;
        $deleteQuery="DELETE FROM `photos` WHERE `photos`.`id`='".$this->id."'";
        mysqli_query($this->conn,$deleteQuery);
        unlink("../../imgfiles/".$this->imgNameTile);
        header('location:trashed.php');
    }
    public function makeProfileData($id=''){
        $this->id=$id;
        $unsetProfileQuery="UPDATE `photos` SET `profilesflag`=NULL;";
        mysqli_query($this->conn,$unsetProfileQuery);
        $setProfileQuery="UPDATE `photos` SET `profilesflag`=1 WHERE `photos`.`id`='".$this->id."';";
        mysqli_query($this->conn,$setProfileQuery);
        header('location:index.php');
    }




}