<?php
include_once('../../src/PrimarySection/primarysection.php');
include_once('../../src/Utility/debug.php');
$debugObj=new debug();
$primaryObj=new primarysection();
$id=$_GET['idNumber'];

session_start();


$searchDara=$primaryObj->singleShow($id);
$_SESSION['PrimarysearchResult']=$searchDara;
//$debugObj->CheckData($searchDara);


if(isset($_SESSION['PrimarysearchResult']) && !empty($_SESSION['PrimarysearchResult'])){

    ?>
    NID Number:<?php echo $searchDara['nid_number'] ?><br/>
    Name:<?php echo $searchDara['name'] ?><br/>
    Father Name:<?php echo $searchDara['father_name'] ?><br/>
    Mother Name:<?php echo $searchDara['mother_name'] ?><br/>
    Birth Day:<?php echo $searchDara['birthday'] ?><br/>
    Address:<?php echo $searchDara['address'] ?><br/>

    <?php

}else{
    echo "No match found !";
}
unset($_SESSION['PrimarysearchResult']);
?>