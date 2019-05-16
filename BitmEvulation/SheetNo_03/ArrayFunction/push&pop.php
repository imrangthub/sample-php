<?php
/**
          array_push()	Inserts one or more elements to the end of an array
 */

$color=array('Blue','Yellow','Green');
array_push($color,"White","Black");
print_r($color);
echo "</br>";

$ar=array("a"=>"apple","b"=>"Bool");
array_push($ar,"Cate","Dog");
print_r($ar);
echo "</br>";

//        array_pop()	Deletes the last element of an array

$color2=array('Blue','Yellow','Green');
array_pop($color2);
print_r($color2);