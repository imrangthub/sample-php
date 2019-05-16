<?php


$num=0;
while($num<20){
    $num++;
    echo $num;
    if($num == 15){
        continue;
    }else{
        echo "Continue at 15 (".$num.")</br>";
    }

}

