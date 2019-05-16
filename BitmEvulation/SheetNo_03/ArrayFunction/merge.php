<?php
/**
       array_merge()	Merges one or more arrays into one array
 */
$a=array('one','two','three');
$b=array('1','2','3');
$c=array('Red','Green','Blue');

print_r(array_merge($b,$a,$c));
echo "</br>";
echo "</br>";

$customer1=array('Name'=>'Imran','location'=>'Dhaka','age'=>'26');
$customer2=array('Name'=>'Monir','Nationality'=>'Bangladesi','Relagion'=>'Islam');
print_r($customer1);
echo "</br>";
print_r($customer2);
echo "</br>";
print_r(array_merge($customer1,$customer2));
echo "</br>";

$a=array(3=>"red",4=>"green");
echo "$a[4]";
echo "</br>";
print_r(array_merge($a));