<?php
if(!empty($_GET['action'])  && $_GET['action'] == 'edit_Nid')
{
    $myData=$_POST['nidNo'];
    session_start();
    $_SESSION['searchMsg']="$myData";
    header('location:../../../dashboard.php?page=editNid_content');
}

if(!empty($_GET['action'])  && $_GET['action'] == 'update_Nid')
{
    $myData=$_POST['nidNo'];
    session_start();
    $_SESSION['updateMsg']="$myData. Update successfully";
    header('location:../../../dashboard.php?page=editNid_content');
}


?>


