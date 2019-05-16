<?php
//            for loop

for($i=0; $i<=20;$i++){
    print $i;

    echo "</br>";
}


             //  for each loop only for Array operation

$nameList=array('Rohaim','Rohaman','Korim','Hafiz');

foreach($nameList as $ky=>$val){
    echo $ky.'=>'.$val;

    echo "</br>";
}
echo "</br>";

$nameArray=array('First Name'=>'MD','Middle Name'=>'Imran','Last Name'=>'Hossain.');
foreach($nameArray as $key=>$val){

    echo $key.' '.$val;
    echo "</br>";

}


