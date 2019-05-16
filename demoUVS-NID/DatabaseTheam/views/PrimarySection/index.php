<?php
session_start();
include_once('../../src/PrimarySection/primarysection.php');
include_once('../../src/Utility/debug.php');
$debugObj=new debug();
$primaryObj=new primarysection();

//$debugObj->CheckData($_SESSION['searchResult']);

$searchPerson=$_SESSION['searchResult'];

?>

<html>
<head>
    <title>primary section</title>
</head>
<body>



<h5>Search person by ID number</h5>
<form action="show.php" method="get">
    <input type="text" name="idNumber"><input type="submit" value="GO >>">
</form>
</body>
</html>

<a href="create.php">Click </a> here for add person.
