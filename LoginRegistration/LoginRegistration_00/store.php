<?php
include_once'Src/Users/Users.php';

$obj = new Users;
$obj->prepare($_POST)->store();
?>