<?php
if(!empty($_GET['action'])  && $_GET['action'] == 'store_newThana')
{
    $myData=$_POST['thanaCode'];
    session_start();
    $_SESSION['storeMsg']="$myData. .xThana Successfully added";
    header('location:../../../dashboard.php?page=addThana_content');
}


?>


