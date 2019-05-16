<?php


class slidShowCls {

    public $id='';
    public $title='';
    public $viewText='';
    public $imgName='';
    public $imgNameTime='';
    public $tempName='';
    public $conn='';


    public function __construct(){
        $this->conn=mysqli_connect("localhost","root","");
        mysqli_select_db($this->conn,"uvsnid");
    }


    public function prepareData($data='', $imgData=''){
        if(isset($data) && !empty($data)){
            $this->id=$data['id'];
            $this->title=$data['title'];
            $this->viewText=$data['viewText'];
        }
        if(isset($imgData) && !empty($imgData)){
            $this->imgName=$imgData['image']['name'];
            $this->tempName=$imgData['image']['tmp_name'];
        }
    }

    public function storeData(){
        if(empty($this->title) || empty($this->viewText)){
            session_start();
            $_SESSION['storeErrorMsg']='Require field is Empty !!';
        }else{

            $acceptExtensions=array('JPG','jpg','jpeg','png');
            $fileExp=explode('.',$this->imgName);
//        print_r($fileExp);
            $currentExtension=end($fileExp);
            if(in_array($currentExtension,$acceptExtensions)){
                $this->imgNameTime=time().$this->imgName;
                if(!empty($this->title) && !empty($this->viewText) && !empty($this->imgNameTime)){
                    $storeQuery="INSERT INTO `homeslidshow` (`title`,`view_text`,`name`) VALUES ('".$this->title."','".$this->viewText."','".$this->imgNameTime."');";
                    if(mysqli_query($this->conn,$storeQuery)){
                        move_uploaded_file($this->tempName,"../../../../../../imageFiles/homePageSlidShowImages/".$this->imgNameTime);
                        session_start();
                        $_SESSION['storeMsg']="Successfully Inserted new Data !!";
                    }else{
                        session_start();
                        $_SESSION['storeMsg']=" Data Insertion failed.";
                        die();
                    }
                }
            }else{
                session_start();
                $_SESSION['storeErrorMsg']='Invalid file format !!';
            }
        }
    }

    public function index(){
        $allData=array();
        $getAllDataQuery="SELECT * FROM `homeslidshow` WHERE `deleted_at` IS NULL";
        $tempResult=mysqli_query($this->conn,$getAllDataQuery);
        while($oneData=mysqli_fetch_assoc($tempResult)){
            $allData[]=$oneData;
        }
        return $allData;
    }

    public function singleShow($id=''){
        $this->id=$id;
        $singleDataQuery="SELECT * FROM `homeslidshow` WHERE `id`='".$this->id."';";
        $tempResult=mysqli_query($this->conn,$singleDataQuery);
        $row=mysqli_fetch_assoc($tempResult);
        return $row;
    }
    public function update(){
        if(empty($this->title) || empty($this->viewText)){
            session_start();
            $_SESSION['updateErrorMsg']='Require field is Empty !!';
        }else{

            $acceptExtensions=array('JPG','jpg','jpeg','png');
            $fileExp=explode('.',$this->imgName);
//        print_r($fileExp);
            $currentExtension=end($fileExp);
            if(in_array($currentExtension,$acceptExtensions)){
                $this->imgNameTime=time().$this->imgName;
                if(!empty($this->title) && !empty($this->viewText) && !empty($this->imgNameTime)){
                    $updateQuery="UPDATE `homeslidshow` SET `title`='".$this->title."',`view_text`='".$this->viewText."',`name`='".$this->imgNameTime."',`modify_at`='".date(Y-m-m)."' WHERE `homeslidshow`.`id`='".$this->id."';";
                    if(mysqli_query($this->conn,$updateQuery)){
                        session_start();
                        unlink("../../../../../../imageFiles/homePageSlidShowImages/".$_SESSION['unlinkPhotoName']);
                        unset($_SESSION['unlinkPhotoName']);
                        move_uploaded_file($this->tempName,"../../../../../../imageFiles/homePageSlidShowImages/".$this->imgNameTime);
                        session_start();
                        $_SESSION['updateMsg']="Successfully update Data !!";
                    }else{
                        session_start();
                        $_SESSION['updateMsg']=" Update failed.";
                        die();
                    }
                }
            }else{
                session_start();
                $_SESSION['updateErrorMsg']='Invalid file format !!';
            }
        }
    }

    public function trash($id=''){
        $this->id=$id;
        $trashQuery="UPDATE `homeslidshow` SET `deleted_at`='".date(Y-m-m)."' WHERE `homeslidshow`.`id`='".$this->id."';";
        mysqli_query($this->conn,$trashQuery);

    }
    public function activation($id=''){
        $this->id=$id;
        $activationQuery="UPDATE `homeslidshow` SET `status_flag`=NULL WHERE `homeslidshow`.`id`='".$this->id."';";
        mysqli_query($this->conn,$activationQuery);

    }
    public function blocked($id=''){
        $this->id=$id;
        $blockedQuery="UPDATE `homeslidshow` SET `status_flag`='".date(Y-m-m)."' WHERE `homeslidshow`.`id`='".$this->id."';";
        mysqli_query($this->conn,$blockedQuery);

    }
    public function selectedImages(){
        $allData=array();
        $getAllDataQuery="SELECT * FROM `homeslidshow` WHERE `deleted_at` IS NULL AND `status_flag` IS NULL";
        $tempResult=mysqli_query($this->conn,$getAllDataQuery);
        while($oneData=mysqli_fetch_assoc($tempResult)){
            $allData[]=$oneData;
        }
        return $allData;

    }






}

?>