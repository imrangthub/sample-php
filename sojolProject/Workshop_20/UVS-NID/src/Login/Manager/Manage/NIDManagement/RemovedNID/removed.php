<?php
if(!empty($_GET['action'])  && $_GET['action'] == 'removed_nid')
{
    $myData=$_POST['nidNo'];
    session_start();
    $_SESSION['searchMsg']="$myData";
    header('location:../../../dashboard.php?page=removeNid_content');
}

if(!empty($_GET['action'])  && $_GET['action'] == 'removdComplete_nid')
{
    $myData=$_POST['nidNo'];
    session_start();
    $_SESSION['removedMsg']="Remove successfully";
    header('location:../../../dashboard.php?page=removeNid_content');
}


?>


