<?php
include_once('../../src/PhotoAndProfilePic/photoProfilePic.php');
include_once('../../src/Utility/debug.php');
$debugObj=new debug();
$photoPicObj=new photoProfilePic();

$id=$_GET['id'];

$photoPicObj->makeProfileData($id);