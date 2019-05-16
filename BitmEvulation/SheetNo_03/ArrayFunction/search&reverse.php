<?php
/**
         array_search()	Searches an array for a given value and returns the key
 */

$color=array("Green","Blue","Black");
echo (array_search("Black",$color));
echo "</br>";

$ar=array("a"=>"10","b"=>10,"c"=>"Ten");
echo (array_search(10,$ar,true));
echo "</br>";

//        array_reverse()	Returns an array in the reverse order


$color=array("Green","Blue","Black");
print_r($color);
echo "</br>";
echo $color[0];

echo "</br>";
print_r(array_reverse($color));
echo "</br>";
echo $color[2];
echo "</br>";
print_r(array_reverse($color,true));
echo "</br>";
echo $color[2];
