<?php
include_once('../../src/Utility/debug.php');
include_once('../../src/PhotoAndProfilePic/photoProfilePic.php');
$debugObj=new debug();
$photoPicObj=new photoProfilePic();
//$debugObj->checkData($_GET);

$id=$_GET['id'];
$name=$_GET['name'];
$photoPicObj->delete($id,$name);

