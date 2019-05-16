<?php
class users{

    public $id="";
    public $userName="";
    public $email="";
    public $password="";
    public $conn="";


    public function __construct(){
        $this->conn=mysqli_connect("localhost","root","");
        mysqli_select_db($this->conn,"adminpanel");
    }

    public function prepare($data=""){
        if(isset($data['user_name']) && !empty($data['user_name'])){
            $this->userName=$data['user_name'];
        }
        if(isset($data['email']) && !empty($data['email'])){
            $this->email=$data['email'];
        }
        if(isset($data['password']) && !empty($data['password'])){
            $this->password=$data['password'];
        }
    }

     public function store(){
         $insertQuery="INSERT INTO `registration` (`username`,`email`,`pass`)
                       VALUES('".$this->userName."','".$this->email."','".$this->password."')";
         if(mysqli_query($this->conn,$insertQuery)){
             echo "Data successfully inserted";
         }else{
             echo "Insertion failed";
         }

     }
    public function signUp(){
        session_start();
        $loginQuery="SELECT * FROM `registration` WHERE `email`='".$this->email."'";

        $tempResult=mysqli_query($this->conn,$loginQuery);
        $row=mysqli_fetch_array($tempResult);
//        print_r($row);

        if($row['pass']==$this->password){
            $_SESSION['userName']=$row['username'];
            header('location:myAdmin/index.php');
        }else{
            header('location:logins.php');
        }
    }



}