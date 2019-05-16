<?php
/**
    array_replace()	Replaces the values of the first array with the values from following arrays
 */
$a=array("Green","Blue","Yellow");
$b=array("One","Two","Three","Four");
$c=array("green","blue");

print_r(array_replace($b,$c));
echo "</br>";
print_r(array_replace($b,$a,$c));

echo "</br>";
$a1=array("a"=>"red","b"=>"green");
$a2=array("a"=>"orange","burgundy");
print_r(array_replace($a1,$a2));

echo "</br>";

$a3=array("red","green","blue","yellow");
$a4=array(0=>"orange",3=>"burgundy");
print_r(array_replace($a3,$a4));