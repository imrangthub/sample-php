<?php
session_start();
include_once('../../src/Utility/debug.php');
include_once('../../src/SecondarySection/secondarysection.php');
$debugObj=new debug();
$secondaryObj=new secondarysection();
$id=$_GET['idNumber'];
$searchResult=$secondaryObj->singleShow($id);

//$debugObj->CheckData($id);
//$debugObj->CheckData($searchResult);



    ?>
    NID Number:<?php echo $searchResult['nid_number'] ?><br/>
    Current address:<?php echo $searchResult['current_address'] ?><br/>
    Phone:<?php echo $searchResult['phone'] ?><br/>




