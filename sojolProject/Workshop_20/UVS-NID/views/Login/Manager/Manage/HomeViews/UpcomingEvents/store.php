<?php
include_once('../../../../../../src/Login/Manager/Manage/HomeViews/UpcomingEvents/upcomingEventCls.php');
include_once('../../../../../../src/Utility/debugs.php');
$debugObj=new debugs();
$upcomingEventObj=new upcomingEventCls();
$upcomingEventObj->prepareData($_POST);

if(!empty($_GET['action'])  && $_GET['action'] == 'storeEvent')
{
    $myData=$upcomingEventObj->title;
    session_start();
    $_SESSION['storeMsg']="$myData";
    header('location:../../../dashboard.php?page=events_content');
}


?>


