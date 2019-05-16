<?php
//include_once('../../../../src/Bitm/Seip113827/Utility/debugs.php');
//use App\Bitm\Seip113827\Utility\debugs;

include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\Hobby\hobbys;
$debug=new debugs();

$hobbyObj=new hobbys();

//$data=$_POST;
//
//$debug->Debug($data);
//$debug->Debug($debug->Debug($_POST["hobby"]));

$hobby=implode(",",$_POST["hobby"]);

$_POST["hobby"]=$hobby;
//$debug->Debug($_POST);

$hobbyObj->prepar($_POST);
$hobbyObj->storeData();






