<?php
//include_once('../../../../src/Bitm/Seip113827/Utility/debugs.php');
//use App\Bitm\Seip113827\Utility\debugs;

include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\Gender\genders;
$debugObj=new debugs();
$gendersObj=new genders();

//$debugObj->Debug($_POST);
$gendersObj->prepar($_POST);

$gendersObj->storeData();




