<?php
/**
(PHP 4, PHP 5, PHP 7)
serialize — Generates a storable representation of a value
*/

$mySerializeData=serialize(array('Mat','Language','Science'));

echo $mySerializeData;

echo"</br>";

$myPreviousData=unserialize($mySerializeData);   // unserialize — Creates a PHP value from a stored representation


print_r($myPreviousData);


