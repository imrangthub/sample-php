<?php
include_once('../../src/City_Email/cityEmails.php');
include_once('../../src/Utility/debug.php');
$debugObj=new debug();
$cityEmailsObj=new cityEmails();
//$debugObj->checkData($_POST);

$cityEmailsObj->preparer($_POST);
$cityEmailsObj->storeData();
