<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:../login.php');
}
if(isset($_SESSION['user'])){
    echo 'Welcome !'.$_SESSION['user'];
}
?>


<h4><a href="logout.php?logout">logout</a></h4>

