<?php
include_once('../../src/Utility/debug.php');
include_once('../../src/Mobile/mobiles.php');
$debugObj=new debug();
$mobileObj=new mobiles();
$mobileObj->prepare($_POST);
$mobileObj->storeData();
