<?php
if(!empty($_GET['action'])  && $_GET['action'] == 'store_newNid')
{
    $myData=$_POST['nidNo'];
    session_start();
    $_SESSION['storeMsg']="$myData";
    header('location:../../../dashboard.php?page=addNid_content');
}


?>


