<?php
//        empty — Determine whether a variable is empty


$val1='Imran';
$val2='';
$val3=null;
$val4='';

var_dump(empty($val4));

echo "</br>";

if(empty($val4)){
    echo 'Variable is Empty.';
}else{
    echo 'Variable is Not empty';
}