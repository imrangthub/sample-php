<?php
if(!empty($_GET['action'])  && $_GET['action'] == 'search_Thana')
{
    $myData=$_POST['thanaCode'];
    session_start();
    $_SESSION['searchMsg']="Get. $myData. This Thana !!";
    header('location:../../../dashboard.php?page=updateThana_content');
}
if(!empty($_GET['action'])  && $_GET['action'] == 'update_Thana')
{
    $myData=$_POST['thanaCode'];
    session_start();
    $_SESSION['updateMsg']="$myData. .This Thana Successfully Updated";
    header('location:../../../dashboard.php?page=updateThana_content');
}


?>


