<?php
/**
      array_filter()	Filters the values of an array using a callback function
 */

function test_odd($var){
    return($var & 1);
}

$a1=array("a","b",2,3,4,5);
print_r(array_filter($a1,"test_odd"));
echo "</br>";


$myArray=array('Name'=>'Imran','Location'=>'Dhaka','age'=>'26');
$myAr=array('1','2','r');
print_r(array_flip($myArray));
print_r(array_flip($myAr));