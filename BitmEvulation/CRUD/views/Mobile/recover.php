<?php
include_once('../../src/Mobile/mobiles.php');
$id=$_GET['id'];
$mobileObj=new mobiles();
$mobileObj->recover($id);