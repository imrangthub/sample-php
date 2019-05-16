<?php
if(!empty($_GET['action'])  && $_GET['action'] == 'store_newOfficer')
{
    $myData=$_POST['officerCode'];
    session_start();
    $_SESSION['storeMsg']="$myData. .This officer Successfully added";
    header('location:../../../dashboard.php?page=addOfficer_content');
}


?>


