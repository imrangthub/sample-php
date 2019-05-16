<?php
if(!empty($_GET['action'])  && $_GET['action'] == 'search_officer')
{
    $myData=$_POST['officerZipCode'];
    session_start();
    $_SESSION['searchMsg']="Get. $myData. This Officer !!";
    $_SESSION['officerZipCode']=$myData;
    header('location:../../../dashboard.php?page=deleteBlockOfficer_content');
}


//Operation ....

if(!empty($_GET['operation'])  && $_GET['operation'] == 'delete_officer')
{

    session_start();
    $_SESSION['operationMsg']="Delete Officer";
    header('location:../../../dashboard.php?page=deleteBlockOfficer_content');
}
if(!empty($_GET['operation'])  && $_GET['operation'] == 'block_officer')
{

    session_start();
    $_SESSION['operationMsg']=$_SESSION['thanaCode']."Blocked Officer";
    header('location:../../../dashboard.php?page=deleteBlockOfficer_content');
}
if(!empty($_GET['operation'])  && $_GET['operation'] == 'active_officer')
{

    session_start();
    $_SESSION['operationMsg']=$_SESSION['thanaCode']."Active Officer";
    header('location:../../../dashboard.php?page=deleteBlockOfficer_content');
}


?>


