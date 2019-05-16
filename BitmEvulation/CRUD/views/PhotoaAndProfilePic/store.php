<?php
include_once('../../src/Utility/debug.php');
include_once('../../src/PhotoAndProfilePic/photoProfilePic.php');
$debugObj=new debug();
$photoPicObj=new photoProfilePic();

//$debugObj->checkData($_POST);
//echo "<br>";
//$debugObj->checkData($_FILES);

$photoPicObj->preparer($_POST,$_FILES);
//echo $photoPicObj->tempName;
//echo $photoPicObj->title;
//echo $photoPicObj->imgName;
$photoPicObj->storeData();
