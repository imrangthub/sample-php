<?php
include_once('../../src/City_Email/cityEmails.php');
include_once('../../src/Utility/debug.php');
$debugObj=new debug();
$cityEmailObj=new cityEmails();
$cityEmailObj->preparer($_POST);
$cityEmailObj->update();
