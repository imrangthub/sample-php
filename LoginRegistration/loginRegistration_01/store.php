<?php
include_once 'src/Users/users.php';

$userObj=new users();

$userObj->prepare($_POST);
$userObj->store();

//$regData=$_POST;
//
//print_r($regData);

