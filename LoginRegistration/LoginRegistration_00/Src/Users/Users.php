<?php
class Users{

    public $id ='';
    public $username='';
    public $email = '';
    public $pass='';
    public $conn = '';

    public function __construct()
    {
        $this->conn = mysqli_connect('localhost','root','','adminpanel');
//        mysqli_select_db("");
//        if(isset($conn)){
//            echo'success';
//        }
//        else{
//            echo'dont success';
//        }
    }
    public function prepare($data=''){
        if(isset($data['user_name'])&& !empty($data['user_name'])){
             $this->username = $data['user_name'];
        }
        if(isset($data['email'])&& !empty($data['email'])){
            $this->email = $data['email'];
        }
        if(isset($data['password'])&& !empty($data['password'])){
            $this->pass = $data['password'];
        }
        return $this;
    }
    public function store(){
        $query = "INSERT INTO `registration`(`username`,`email`,`pass`)
        VALUES('".$this->username."','".$this->email."','".$this->pass."')";
//        echo $query;
//        die();
        if(mysqli_query($this->conn,$query)){
            echo 'success';
        }
    }

public function store_login(){
    session_start();
   $query = "SELECT * FROM `registration` WHERE `email` = '".$this->email."'";

    $result = mysqli_query($this->conn,$query);
    $row = mysqli_fetch_array($result);
    //print_r($row);

    if($row['pass']==$this->pass){
    $_SESSION['user']=$row['username'];
        header('location:admin/index.php');
    }else{
        header('location:login.php');
    }
}
    }
?>