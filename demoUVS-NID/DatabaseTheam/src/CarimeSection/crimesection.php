<?php
class crimesection{
    public $nidNumbar='';
    public $crimeTitle='';
    public $crimeType='';
    public $description='';
    public $areaThana='';
    public $officerZip='';

    public $conn='';

    public function __construct(){
        $this->conn=mysqli_connect("localhost","root","");
        mysqli_select_db($this->conn,"damo_uvsnid");
    }

    public function preparerData($data=''){
        if(isset($data) && !empty($data)){
            $this->crimeTitle=$data['title'];
            $this->crimeType=$data['type'];
            $this->description=$data['description'];
            $this->areaThana=$data['thana_area'];
            $this->officerZip=$data['zip_code'];
        }
    }

    public function storeData(){
//        if(!empty($this->nidNumbar) && !empty($this->crimeTitle) && !empty($this->crimeType) && !empty($this->description) && !empty($this->areaThana) && !empty($this->officerZip)){
           $storeQuery="INSERT INTO `crime_section` (`nid_number`,`crime_title`,`crime_type`,`description`,`area_thana`,`officer_zip`) VALUE ('".$this->nidNumbar."','".$this->crimeTitle."','".$this->crimeType."','".$this->description."','".$this->areaThana."','".$this->officerZip."');";
            mysqli_query($this->conn,$storeQuery);
            session_start();
            $_SESSION['msgStoreData']='Successfully data Inserted';
            header('location:create.php');
//        }else{
//            session_start();
//            $_SESSION['msgStoreData']='Data Inserted failed.';
//            header('location:create.php');
//
//
//        }
//        echo "No data Inserted";

    }
    public function singleShow($id=''){
        $allData=array();
        $this->nidNumbar=$id;
        $getSingleDataQuery="SELECT * FROM `crime_section` WHERE `crime_section`.`nid_number`=$this->nidNumbar;";
        $tempResult= mysqli_query($this->conn,$getSingleDataQuery);
        while($oneRow=mysqli_fetch_assoc($tempResult)){
            $allData[]=$oneRow;
        }
        return $allData;
    }





}