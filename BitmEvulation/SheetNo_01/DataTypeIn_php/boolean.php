<?php
 $condition1=true;    // assign the value True on condition1 variable.
$condition2=false;    // assign the value false in condition2 variable.


echo $condition1;    // It will return 1  thats mean i true.
echo "</br>";
echo $condition2;  // it will return nothing because it is false.


if($condition1){
    echo "Show the result because the condition1 is True.";
}

echo "</br>";
if($condition2){
    echo "Nothing can Show";   // because the condition2 is false.
}


 if($condition2){
     echo "Never pring.";
 }elseif($condition1){
     echo "This statement will be Pring.";
 }