<?php
//include_once('../../../../src/Bitm/Seip113827/Utility/debugs.php');
//use App\Bitm\Seip113827\Utility\debugs;

include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\ProfilePic\profilePics;
$debugObj=new debugs();
$profilepicsObj=new profilePics();
//$profilepicsObj->storeData($_POST, $_FILES);

//
$debugObj->Debug($_FILES);
$profilepicsObj->prepar($_POST,$_FILES);
$profilepicsObj->storeData();










