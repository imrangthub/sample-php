<?php
$x=75;
$y=25;

$a;




function addition(){
    $GLOBALS['z']=$GLOBALS['x']+$GLOBALS['y'];
}

addition();
echo $z;


function other(){
    $GLOBALS['myVariable']='Imran'.'Hossain';
    $GLOBALS['car']="Crola";
    $GLOBALS['pc']='Levnovo';
}

other();

echo $myVariable;
echo "</br>";
echo $car;
echo "</br>";
echo 'My first laptop Name is:'. $pc;
$GLOBALS['pc']='Mac';
echo"</br>";
echo 'My second laptop name is: '.$pc;

echo"</br>";
echo 'My care Name is: '.$car;


$car='BMW';

echo"</br>";
echo 'Now i replace my car, that is:'.$car;





?>