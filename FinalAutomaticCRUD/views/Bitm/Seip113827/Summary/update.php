<?php
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Summary\summarys;
use App\Bitm\Seip113827\Utility\debugs;
$debugObj=new debugs();
$summarysObj=new summarys();

//session_start();
//$_SESSION["massege"][]=$_POST;
//$debugObj->Debug($_POST);

$summarysObj->prepar($_POST);
$summarysObj->update();








