<?php

$zipCode=$_POST['zipcode'];
if($zipCode>100){
    header('location:../../../PoliceThana/RamnaThana/index.php');
}else{
    header('location:../../../PoliceThana/PaltanThana/index.php');
}
?>


