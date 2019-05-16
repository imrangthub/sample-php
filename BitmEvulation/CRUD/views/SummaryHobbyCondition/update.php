<?php
include_once('../../src/Utility/debug.php');
include_once('../../src/SummaryHobbyCondition/summaryHobbyCondition.php');
$debugObj=new debug();
$summaryHobbyConditionObj=new summaryHobbyCondition();
//$debugObj->checkData($_POST);

$hobby=implode(",",$_POST["hobby"]);
$_POST['hobby']=$hobby;

//$debugObj->checkData($_POST);
$summaryHobbyConditionObj->preparer($_POST);
$summaryHobbyConditionObj->update();
