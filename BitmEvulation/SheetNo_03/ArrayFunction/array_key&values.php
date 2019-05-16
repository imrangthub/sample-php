<?php
/**
     Return the all key of an array as a index array,.
 */

$myArray=array('Name'=>'Imran','Location'=>'Dhaka','age'=>'26');
$result=array_keys($myArray);
foreach($result as $keys){
    echo "$keys";
    echo "</br>";
}
echo "</br>";

print_r(array_keys($myArray,"26"));
echo "</br>";

$a=array(10,20,30,'10');
print_r(array_keys($a,"10",true));
echo "</br>";
print_r(array_keys($a,10,false));
echo "</br>";

//    array_values()	Returns all the values of an array

$myArray=array('Name'=>'Imran','Location'=>'Dhaka','age'=>'26');
print_r(array_values($myArray));