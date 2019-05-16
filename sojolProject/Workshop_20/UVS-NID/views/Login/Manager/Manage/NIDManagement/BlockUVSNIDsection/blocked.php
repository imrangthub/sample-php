<?php
if(!empty($_GET['action'])  && $_GET['action'] == 'search_nid')
{
    $myData=$_POST['nidNo'];
    session_start();
    $_SESSION['searchMsg']="$myData";
    header('location:../../../dashboard.php?page=blockSection_content');
}

if(!empty($_GET['action'])  && $_GET['action'] == 'fullyBlock_nid')
{
    $myData=$_POST['nidNo'];
    session_start();
    $_SESSION['blockMsg']="Fully Blocked !!";
    header('location:../../../dashboard.php?page=blockSection_content');
}
if(!empty($_GET['action'])  && $_GET['action'] == 'secondaryBlock_nid')
{
    $myData=$_POST['nidNo'];
    session_start();
    $_SESSION['blockMsg']="Secondary section Blocked !!";
    header('location:../../../dashboard.php?page=blockSection_content');
}
if(!empty($_GET['action'])  && $_GET['action'] == 'crimeBlock_nid')
{
    $myData=$_POST['nidNo'];
    session_start();
    $_SESSION['blockMsg']="Crime section Blocked !!";
    header('location:../../../dashboard.php?page=blockSection_content');
}


?>


