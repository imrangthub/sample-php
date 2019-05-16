<?php
include_once('../../src/Utility/debug.php');
include_once('../../src/SecondarySection/secondarysection.php');
$secondaryObj=new secondarysection();
$debugObj=new debug();
//$debugObj->CheckData($_POST);
$secondaryObj->preparerData($_POST);
$secondaryObj->storeData();

