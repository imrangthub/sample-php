<?php
class secondarysection{

    public $nidNumbar='';
    public $currentAddress='';
    public $phone='';
    public $conn='';

    public function __construct(){
        $this->conn=mysqli_connect("localhost","root","");
        mysqli_select_db($this->conn,"damo_uvsnid");
    }

    public function preparerData($data=''){
        if(isset($data) && !empty($data)){
            $this->nidNumbar=$data['nidNumber'];
            $this->currentAddress=$data['current_address'];
            $this->phone=$data['phone'];
        }
    }

    public function storeData(){
        if(!empty($this->nidNumbar) && !empty($this->currentAddress) && !empty($this->phone)){
            $storeQuery="INSERT INTO `secondary_section` (`nid_number`, `current_address`, `phone`) VALUES ('".$this->nidNumbar."', '".$this->currentAddress."', '".$this->phone."');";
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
        $getSingleDataQuery="SELECT * FROM `secondary_section` WHERE `secondary_section`.`nid_number`=$this->nidNumbar;";
        $tempResult= mysqli_query($this->conn,$getSingleDataQuery);
        $row=mysqli_fetch_assoc($tempResult);
        return $row;


    }




}