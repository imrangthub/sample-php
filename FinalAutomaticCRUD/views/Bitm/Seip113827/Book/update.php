<?php
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Book\books;
use App\Bitm\Seip113827\Utility\debugs;
$debugObj=new debugs();
$booksObj=new books();

//session_start();
//$_SESSION["massege"][]=$_POST;
//$debugObj->Debug($_SESSION["massege"]);

$booksObj->prepar($_POST);
$booksObj->update();








