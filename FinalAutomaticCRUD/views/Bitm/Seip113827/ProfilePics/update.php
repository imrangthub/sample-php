<?php
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\ProfilePic\profilePics;
$debug=new debugs();
$profilesObj=new profilePics();


$profilesObj->prepar($_POST,$_FILES);
$profilesObj->update();

?>