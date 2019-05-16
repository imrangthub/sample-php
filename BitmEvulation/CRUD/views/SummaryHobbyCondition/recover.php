<?php
include_once('../../src/SummaryHobbyCondition/summaryHobbyCondition.php');
$id=$_GET['id'];
$summaryHobbyConditionObj=new summaryHobbyCondition();
$summaryHobbyConditionObj->recovery($id);