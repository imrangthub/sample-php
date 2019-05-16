<?php
/**
        array_shift()	Removes the first element from an array, and returns the value of the removed element
 */

$myArray=array('a'=>'Green','b'=>'Blue','c'=>'Yellow');
echo (array_shift($myArray));
echo "</br>";
print_r($myArray);
echo "</br>";

$myArray2=array(1=>"One",0=>"Two","Three");
print_r($myArray2);
echo "</br>";
echo (array_shift($myArray2));
echo "</br>";
print_r($myArray2);
echo "</br>";

//         array_unshift()	Adds one or more elements to the beginning of an array

$nameList=array('Imran','Biddut','Misty');
array_unshift($nameList,"Monir");
print_r($nameList);
echo "</br>";

//         array_sum()	Returns the sum of the values in an array

$numArray=array(12,10,8);
echo (array_sum($numArray));
echo "</br>";
$numArray2=array("a"=>12,"b"=>10,"c"=>8);
echo (array_sum($numArray2));
