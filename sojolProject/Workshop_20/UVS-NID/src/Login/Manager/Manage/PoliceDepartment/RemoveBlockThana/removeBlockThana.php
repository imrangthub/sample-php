<?php
if(!empty($_GET['action'])  && $_GET['action'] == 'search_Thana')
{
    $myData=$_POST['thanaCode'];
    $x="xxxx";
    session_start();
    $_SESSION['searchMsg']="Get. $myData. This Thana !!";
    $_SESSION['thanaCode']=$myData;
    header('location:../../../dashboard.php?page=removedBlockThana_content');
}


//Operation ....

if(!empty($_GET['operation'])  && $_GET['operation'] == 'remove_Thana')
{

    session_start();
    $_SESSION['operationMsg']="Remove Thana";
    header('location:../../../dashboard.php?page=removedBlockThana_content');
}
if(!empty($_GET['operation'])  && $_GET['operation'] == 'block_Thana')
{

    session_start();
    $_SESSION['operationMsg']=$_SESSION['thanaCode']."Blocked Thana";
    header('location:../../../dashboard.php?page=removedBlockThana_content');
}
if(!empty($_GET['operation'])  && $_GET['operation'] == 'active_Thana')
{

    session_start();
    $_SESSION['operationMsg']=$_SESSION['thanaCode']."Active Thana";
    header('location:../../../dashboard.php?page=removedBlockThana_content');
}


?>


