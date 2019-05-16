<?php
/**
           Pad to the right side of the string, to a new length of 20 characters:
 */



$str="Welcome to my world";
echo str_pad($str,25,".");

echo "</br>";

$str='welcome to my world';

echo (str_pad($str,40,"#",STR_PAD_BOTH));

echo "</br>";

$str='welcome to my world';

echo (str_pad($str,40,"#",STR_PAD_RIGHT));