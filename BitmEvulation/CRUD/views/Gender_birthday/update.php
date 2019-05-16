<?php
include_once('../../src/Gender_birthday/genderBirthday.php');
include_once('../../src/Utility/debug.php');
$debugObj=new debug();
$genderBirthdayObj=new genderBirthday();
//$debugObj->checkData($_POST);
$genderBirthdayObj->preparer($_POST);
$genderBirthdayObj->update();