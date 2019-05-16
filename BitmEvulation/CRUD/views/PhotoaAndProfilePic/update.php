<?php
include_once('../../src/Utility/debug.php');
include_once('../../src/PhotoAndProfilePic/photoProfilePic.php');
$debugObj=new debug();
$photoPicObj=new photoProfilePic();
//$debugObj->checkData($_POST);
//$debugObj->checkData($_FILES);

$photoPicObj->preparer($_POST,$_FILES);
$photoPicObj->update();

