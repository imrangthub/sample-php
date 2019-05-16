<?php
/**

          array_pad()	Inserts a specified number of items, with a specified value, to an array
 */

$color=array("Red","Green","Blue");
print_r(array_pad($color,5,"Black"));
echo "</br>";
print_r(array_pad($color,-5,"White"));

echo "</br>";

//    array_rand()	Returns one or more random keys from an array

$color=array("Red","Green","Blue");
$randKey=array_rand($color);
echo $randKey;
echo "</br>";

$randKey2=array_rand($color,2);
echo $color[$randKey2[0]];
echo $color[$randKey2[1]];