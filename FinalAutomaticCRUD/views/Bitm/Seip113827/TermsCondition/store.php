<?php
session_start();
if(!isset($_SESSION['massege'])){
//    $_SESSION['massege']='<p style="color:red">Accept Terms $ Condition</p>';

}
include_once '../../../../vendor/autoload.php"';
use App\Bitm\Seip113827\TermsCondition\termsConditions;
use App\Bitm\Seip113827\Utility\debugs;
$debugObj=new debugs();
$termConditionObj=new termsConditions();
$debugObj->Debug($_POST);
$termConditionObj->prepar($_POST);
$termConditionObj->storeData();
