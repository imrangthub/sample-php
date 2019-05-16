<?php
if(!empty($_GET['action'])  && $_GET['action'] == 'update_profile')
{
    $myData=$_POST['name'];
    session_start();
    $_SESSION['updateMsg']="Update name.$myData.!!";
    header('location:../../../dashboard.php?page=updateProfile_content');
}


?>


