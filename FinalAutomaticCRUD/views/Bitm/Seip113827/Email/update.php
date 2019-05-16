<?php

include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Email\emails;
use App\Bitm\Seip113827\Utility\debugs;
$debugObj=new debugs();
$emailsObj=new emails();

//session_start();
//$_SESSION["massege"][]=$_POST;
//$debugObj->Debug($_SESSION["massege"]);

$emailsObj->prepar($_POST);
$emailsObj->update();








