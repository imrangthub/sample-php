<?php
               // isset — Determine if a variable is set and is not NULL
$myVal=100;

$result=(isset($myVal));

var_dump(isset($myVal));

echo "</br>";

echo $result;

echo "</br>";

if(isset($myVal)){
    echo 'Variable is Not null';
}else{
    echo 'Variable is Null.';
}

