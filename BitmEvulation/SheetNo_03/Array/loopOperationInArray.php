<?php

$country=array('Bangladesh','pakistan','Nepal','Bhutan');
$arrayLength=count($country);

echo $arrayLength;
echo"</br>";

for($i=0;$i<$arrayLength; $i++){

    echo "$country[$i]";
    echo "</br>";

}

echo"</br>";

foreach($country as $key=>$value){
    echo $key;
    echo "</br>";
}

$run=array("Sakib"=>"102","Tamim"=>"231","Musfiq"=>"211");

foreach($run as $player => $run){
    echo 'Batsman name: '.$player.', Run:'.$run;
    echo "</br>";
}