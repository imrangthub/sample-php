<?php
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Birthday\birthdays;
use App\Bitm\Seip113827\Utility\debugs;
$debugObj=new debugs();
$birthdayObj=new birthdays();

//session_start();
//$_SESSION["massege"][]=$_POST;
//$debugObj->Debug($_SESSION["massege"]);

$birthdayObj->prepar($_POST);
$birthdayObj->update();








