<?php
/**
       array_combine()	Creates an array by using the elements from one "keys" array and one "values" array
 *      Create an array by using the elements from one "keys" array and one "values" array:
 */


$name=array('Imran','Monir','Biddut');
$age=array('26','28','23',);

$result=array_combine($name,$age);
echo "<pre>";
print_r($result);
echo "</pre>";