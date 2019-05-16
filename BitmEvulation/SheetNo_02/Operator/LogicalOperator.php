<?php
$var_1=10;
$var_2=5;
$var_3=100;


if($var_1>$var_2 && $var_3>$var_1){
    echo 'All condition is true.';
}else{
    echo 'all condition is not true';
}

echo "</br>";

if($var_1<$var_2 || $var_3<$var_1){
    echo 'some condition is  true.';
}else{
    echo 'all condition is false';
}