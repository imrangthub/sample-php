<?php

//print_r($_GET);
//die();



session_start();
if(!isset($_SESSION['userName'])){
    header("location:../logins.php");
}
if(isset($_GET['logout'])){
    session_destroy();
    header("location:../logins.php");
}