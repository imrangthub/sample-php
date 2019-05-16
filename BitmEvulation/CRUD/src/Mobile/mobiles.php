<?php
  class mobiles{
      public $id='';
      public $title='';
      public $manufacture='';
      public $conn='';

      public function __construct(){
          $this->conn=mysqli_connect("localhost","root","");
          mysqli_select_db($this->conn,"allcrud");
      }

      public function prepare($data=''){
          if(isset($data) && !empty($data)){
              $this->id=$data['id'];
              $this->title=$data['title'];
              $this->manufacture=$data['manufacture'];
          }
      }
      public function storeData(){
          if(!empty($this->title) && !empty($this->manufacture)){
              $storeQuery="INSERT INTO `mobiles`(`title`,`manufacture`) VALUE ('".$this->title."','".$this->manufacture."')";
              mysqli_query($this->conn,$storeQuery);
              session_start();
              $_SESSION['msgStore']="Data Inserted";
              header("location:edit.php");
          }else{
              session_start();
              $_SESSION['msgStore']="Insertion failed";
              header("location:edit.php");
          }
      }
      public function index(){
          $allData=array();
          $getAllDataQuery="SELECT * FROM `mobiles` WHERE `deleted_at` IS NULL";
          $tempResult=mysqli_query($this->conn,$getAllDataQuery);
          while($oneData=mysqli_fetch_assoc($tempResult)){
              $allData[]=$oneData;
          }
          return $allData;
      }
      public function singleData($id=''){
          if(!empty($id)){
              $this->id=$id;
              $getsingleDataQuery="SELECT * FROM `mobiles` WHERE id='".$this->id."'";
              $tempResult=mysqli_query($this->conn,$getsingleDataQuery);
              $row=mysqli_fetch_assoc($tempResult);
              return $row;
          }
      }
      public function update(){
       $updateQuery="UPDATE `mobiles` SET `title`='".$this->title."',`manufacture`='".$this->manufacture."' WHERE `mobiles`.`id`=$this->id;";
       if(mysqli_query($this->conn,$updateQuery)){
           session_start();
           $_SESSION['msgUpdate']="successfully update.";
       }else{
           $_SESSION['msgUpdate']="Update failed";
       }
          header("location:index.php");
       }
      public function trash($id=''){
          $this->id=$id;
          $trashQuery="UPDATE `mobiles` SET `deleted_at`='".date('Y-m-m')."' WHERE `mobiles`.`id`=$this->id;";
          mysqli_query($this->conn,$trashQuery);
          header("location:index.php");
      }
      public function trashed(){
          $allData=array();
          $trashedQuery="SELECT * FROM `mobiles` WHERE `deleted_at` IS NOT NULL";
          $tempResult=mysqli_query($this->conn,$trashedQuery);
          while($row=mysqli_fetch_assoc($tempResult)){
              $allData[]=$row;
          }
          return $allData;

      }
      public function recover($id=''){
          $this->id=$id;
          $recoverQuery="UPDATE `mobiles` SET `deleted_at`=NULL WHERE `mobiles`.`id`=$this->id;";
          mysqli_query($this->conn,$recoverQuery);
          header('location:trashed.php');
      }
      public function deleted($id=''){
          $this->id=$id;
          $deletedQuery="DELETE FROM `mobiles` WHERE `mobiles`.`id`=$this->id;";
          mysqli_query($this->conn,$deletedQuery);
          header('location:trashed.php');
      }

  }
