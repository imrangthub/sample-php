<?php
include_once('../../src/PhotoAndProfilePic/photoProfilePic.php');
$id=$_GET['id'];
$photoPicObj=new photoProfilePic();
$photoPicObj->recover($id);