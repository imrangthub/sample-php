<?php
include_once('../../src/Utility/debug.php');
include_once('../../src/SummaryHobbyCondition/summaryHobbyCondition.php');
$debugObj=new debug();
$summaryHobbyConditionObj=new summaryHobbyCondition();
//$summaryHobbyConditionObj->prepare($_POST);

$hobby=implode(",",$_POST["hobby"]);
$_POST['hobby']=$hobby;

// $debugObj->checkData($_POST);

$summaryHobbyConditionObj->preparer($_POST);
//echo $summaryHobbyConditionObj->title;
//echo "</br>";
//echo $summaryHobbyConditionObj->summary;
//echo "</br>";
//echo $summaryHobbyConditionObj->hobby;
//echo "</br>";
//echo $summaryHobbyConditionObj->condition_at;
$summaryHobbyConditionObj->storeData();

