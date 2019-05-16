<?php
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Mobile\mobiles;
use App\Bitm\Seip113827\Utility\debugs;
$debugObj=new debugs();
$mobilesObj=new mobiles();

//session_start();
//$_SESSION["massege"][]=$_POST;
//$debugObj->Debug($_SESSION["massege"]);

$mobilesObj->prepar($_POST);
$mobilesObj->storeData();






