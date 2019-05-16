<?php
/**
       array_key_exists()	Checks if the specified key exists in the array
 */



$myArray=array('Name'=>'Imran','Location'=>'Dhaka','age'=>'23');

if(array_key_exists("Location",$myArray)){
    echo 'Yes, Location is in Array.';
}else{
    echo 'No, Location key not there array.';
}
echo "</br>";


$book=array('java','php','ccna');
if(array_key_exists('2',$book)){
    echo 'There are Three or above book there.';
}else{
    echo 'There below of three book.';
}