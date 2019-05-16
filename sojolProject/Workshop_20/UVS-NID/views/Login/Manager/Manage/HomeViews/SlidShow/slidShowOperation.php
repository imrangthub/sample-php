<?php
include_once('../../../../../../src/Login/Manager/Manage/HomeViews/SlidShow/slidShowCls.php');
include_once('../../../../../../src/Utility/debugs.php');
$debugObj=new debugs();
$slidShowObj=new slidShowCls();

//$debugObj->debug($_POST);
//$debugObj->debug($_FILES);
//die();


//$slidShowObj->prepareData($_POST,$_FILES);
//
//echo $slidShowObj->title;
//echo $slidShowObj->imgName;
//echo $slidShowObj->viewText;
//echo $slidShowObj->tempName;
//die();





if(!empty($_GET['action'])  && $_GET['action'] == 'store_sliderPhoto')
{
    $slidShowObj->prepareData($_POST,$_FILES);
    $slidShowObj->storeData();
    header('location:../../../dashboard.php?page=slidShow_content');
}
elseif(!empty($_GET['action'])  && $_GET['action'] == 'edit_sliderPhoto')
{
    $id=$_POST['id'];
    session_start();
    $_SESSION['editID']=$id;
    header('location:../../../dashboard.php?page=editSlidShow_content');
}
elseif(!empty($_GET['action'])  && $_GET['action'] == 'update_sliderPhoto')
{
    $slidShowObj->prepareData($_POST,$_FILES);
    $slidShowObj->update();
    header('location:../../../dashboard.php?page=slidShow_content');
}
elseif(!empty($_GET['action'])  && $_GET['action'] == 'delete_sliderPhoto')
{
    $id=$_POST['id'];
    $slidShowObj->trash($id);
    header('location:../../../dashboard.php?page=slidShow_content');
}
elseif(!empty($_GET['action'])  && $_GET['action'] == 'active_sliderPhoto')
{
    $id=$_POST['id'];
    $slidShowObj->activation($id);
    header('location:../../../dashboard.php?page=slidShow_content');
}
elseif(!empty($_GET['action'])  && $_GET['action'] == 'block_sliderPhoto')
{
    $id=$_POST['id'];
    $slidShowObj->blocked($id);
    header('location:../../../dashboard.php?page=slidShow_content');
}


?>


