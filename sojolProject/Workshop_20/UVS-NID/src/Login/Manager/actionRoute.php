<?php
if(!empty($_GET['action'])  && $_GET['action'] == 'store_sliderPhoto')
{
    $myData=$_POST['title'];
    session_start();
    $_SESSION['storeMsg']="$myData";
    header('location:dashboard.php?page=slidShow_content');
}
include_once('../../../views/Login/Manager/Manage/HomeViews/SlidShow/slidShowOperation.php')


?>