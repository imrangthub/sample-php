<?php
include_once('../../src/Gender_birthday/genderBirthday.php');
include_once('../../src/Utility/debug.php');
$debugObj=new debug();
$genderBirthdayObj=new genderBirthday();
$id=$_GET['id'];
$genderBirthdayObj->recover($id);
