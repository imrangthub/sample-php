<?php
//include_once('../../../../src/Bitm/Seip113827/Utility/debugs.php');
//use App\Bitm\Seip113827\Utility\debugs;

include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\Email\emails;
$debugObj=new debugs();
$emailsObj=new emails();

$emailsObj->prepar($_POST);
$emailsObj->storeData();



