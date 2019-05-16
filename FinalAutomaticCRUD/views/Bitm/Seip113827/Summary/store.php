<?php
//include_once('../../../../src/Bitm/Seip113827/Utility/debugs.php');
//use App\Bitm\Seip113827\Utility\debugs;

include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\Summary\summarys;
$debugObj=new debugs();
$sunmmaryObj=new summarys();

//

$sunmmaryObj->prepar($_POST);
$sunmmaryObj->storeData();




