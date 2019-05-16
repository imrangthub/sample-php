<?php
if(!empty($_GET['action'])  && $_GET['action'] == 'search_officer')
{
    $myData=$_POST['officerZipCode'];
    session_start();
    $_SESSION['searchMsg']="Get. $myData. Officer !!";
    header('location:../../../dashboard.php?page=updateOfficer_content');
}
if(!empty($_GET['action'])  && $_GET['action'] == 'update_officer')
{
    $myData=$_POST['officerName'];
    session_start();
    $_SESSION['updateMsg']="$myData. .This Officer Successfully Updated";
    header('location:../../../dashboard.php?page=updateOfficer_content');
}


?>


