<?php
/**
     compact()	Create array containing variables and their values
 */

$firstName="Imran";
$lastName="Hossain";
$age=26;

$result=compact("firstName","lastName","age");
print_r($result);
echo "</br>";
echo $result['firstName'];
echo "</br>";

//            count()	Returns the number of elements in an array

echo (count($result));



