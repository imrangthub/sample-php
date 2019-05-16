<?php
include_once('../../src/Utility/debug.php');
include_once('../../src/PrimarySection/primarysection.php');
$debugObj=new debug();
$primaryObj=new primarysection();
//$debugObj->CheckData($_POST);


$primaryObj->preparerData($_POST);
$primaryObj->storeData();