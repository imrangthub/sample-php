<?php

session_start();
if (isset($_SESSION['Message'])) {
    echo $_SESSION['Message'];
    unset($_SESSION['Message']);
}

include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\Gender\genders;
$debug=new debugs();
$gendersObj=new genders();
$debug->Debug($_POST);


$gendersObj->prepar($_POST);
$gendersObj->update();
