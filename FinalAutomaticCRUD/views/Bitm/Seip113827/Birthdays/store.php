<?php
//include_once('../../../../src/Bitm/Seip113827/Utility/debugs.php');
//use App\Bitm\Seip113827\Utility\debugs;

include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\Birthday\birthdays;
$debugObj=new debugs();
$birthdayObj=new birthdays();

//$debugObj->Debug($_POST);
$birthdayObj->prepar($_POST);

$birthdayObj->storeData();




