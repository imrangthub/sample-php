<?php
include_once('../../../../../../src/Login/Manager/Manage/HomeViews/NoticeBoard/noticeBoardCls.php');
include_once('../../../../../../src/Utility/debugs.php');
$debugObj=new debugs();
$noticeBoardObj=new noticeBoardCls();

$noticeBoardObj->prepareData($_POST);

if(!empty($_GET['action'])  && $_GET['action'] == 'store_notice')
{
    $myData=$noticeBoardObj->title;
    session_start();
    $_SESSION['storeMsg']="$myData";
    header('location:../../../dashboard.php?page=noticeBoard_content');
}


?>


