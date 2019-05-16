<?php
include_once('../../src/Utility/debug.php');
include_once('../../src/CarimeSection/crimesection.php');
$debugObj=new debug();
$crimesectionObj=new crimesection();
//$debugObj->CheckData($_POST);
$crimesectionObj->preparerData($_POST);
$crimesectionObj->storeData();