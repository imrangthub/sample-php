<?php
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\City\citys;
$debug=new debugs();
$citysObj=new citys();

//$debug->Debug($_POST);
$citysObj->prepar($_POST);
$citysObj->storeData();











