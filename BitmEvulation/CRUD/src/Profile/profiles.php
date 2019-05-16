<?php
class profiles{
    public $conn='';


    public function __construct(){
        $this->conn=mysqli_connect("localhost","root","");
        mysqli_select_db($this->conn,"allcrud");

    }

    public function getProfilePic(){
        $getProfilePicQuery="SELECT * FROM `photos` WHERE `profilesflag` IS NOT NULL; ";
        $tempResult=mysqli_query($this->conn,$getProfilePicQuery);
        $row=mysqli_fetch_assoc($tempResult);
        return $row;
    }
    public function NameGenderBirthdayData(){
        $getData="SELECT * FROM `gender_birthday` WHERE `profilesflag` IS NOT NULL;";
        $tempResult=mysqli_query($this->conn,$getData);
        $row=mysqli_fetch_assoc($tempResult);
        return $row;
    }



}