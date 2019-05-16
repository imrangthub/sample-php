<?php
include_once('../../src/Utility/debug.php');
include_once('../../src/Mobile/mobiles.php');
$debugObj=new debug();
$mobilesObj=new mobiles();
//$debugObj->checkData($_POST);
$mobilesObj->prepare($_POST);
$mobilesObj->update();