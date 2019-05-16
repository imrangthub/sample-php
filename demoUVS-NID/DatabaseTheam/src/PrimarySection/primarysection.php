<?php
class primarysection{
    public $nidNumbar='';
    public $name='';
    public $fatherName='';
    public $motherName='';
    public $birthday='';
    public $address='';

    public $conn='';

    public function __construct(){
        $this->conn=mysqli_connect("localhost","root","");
        mysqli_select_db($this->conn,"damo_uvsnid");
    }

    public function preparerData($data=''){
        if(isset($data) && !empty($data)){
            $this->nidNumbar=$data['nidNumber'];
            $this->name=$data['name'];
            $this->fatherName=$data['fatherName'];
            $this->motherName=$data['motherName'];
            $this->birthday=$data['birthday'];
            $this->address=$data['address'];
        }
    }

    public function storeData(){
        if(!empty($this->nidNumbar) && !empty($this->name) && !empty($this->fatherName) && !empty($this->motherName) && !empty($this->birthday) && !empty($this->address)){
            $storeQuery="INSERT INTO `primary_section` (`nid_number`,`name`,`father_name`,`mother_name`,`birthday`,`address`) VALUE ('".$this->nidNumbar."','".$this->name."','".$this->fatherName."','".$this->motherName."','".$this->birthday."','".$this->address."');";
            mysqli_query($this->conn,$storeQuery);
            session_start();
            $_SESSION['msgStoreData']='Successfully data Inserted';
            header('location:create.php');
        }else{
            session_start();
            $_SESSION['msgStoreData']='Data Inserted failed.';
            header('location:create.php');

        }

    }
    public function singleShow($id=''){
        $this->nidNumbar=$id;
        $getSingleDataQuery="SELECT * FROM `primary_section` WHERE `primary_section`.`nid_number`=$this->nidNumbar;";
       $tempResult= mysqli_query($this->conn,$getSingleDataQuery);
        $row=mysqli_fetch_assoc($tempResult);
        return $row;


    }





}