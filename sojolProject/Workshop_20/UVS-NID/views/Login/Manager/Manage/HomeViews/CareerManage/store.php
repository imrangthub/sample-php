<?php
if(!empty($_GET['action'])  && $_GET['action'] == 'storeCircular')
{
    $myData=$_POST['title'];
    session_start();
    $_SESSION['storeMsg1']="$myData";
    header('location:../../../dashboard.php?page=career_content');
}

if(!empty($_GET['action'])  && $_GET['action'] == 'storeResult')
{
    $myData=$_POST['title'];
    session_start();
    $_SESSION['storeMsg2']="$myData";
    header('location:../../../dashboard.php?page=career_content');
}

?>


