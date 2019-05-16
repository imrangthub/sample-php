<?php
include_once('src/Utility/debug.php');
include_once('src/PrimarySection/primarysection.php');
include_once('src/SecondarySection/secondarysection.php');
include_once('src/CarimeSection/crimesection.php');
$debugObj= new debug();
$primaryObj=new primarysection();
$secondaryObj=new secondarysection();
$crimeSectionObj=new crimesection();

$id=$_GET['nidNumber'];

$finalResult=$primaryObj->singleShow($id);
$finalResultSecondary=$secondaryObj->singleShow($id);
$finalResultCrimeSection=$crimeSectionObj->singleShow($id);
//$debugObj->CheckData($finalResultCrimeSection);
//die();
//$debugObj->CheckData($finalResult);
//die();
if(isset($finalResult)){

?>
<html>
<head>
    <body>
<h2>Primary Section:</h2>
<?php if(!empty($finalResult)){ ?>
NID Number:<?php echo $finalResult['nid_number'] ?><br/>
Name:<?php echo $finalResult['name'] ?><br/>
Father Name:<?php echo $finalResult['father_name'] ?><br/>
Mother Name:<?php echo $finalResult['mother_name'] ?><br/>
Birth Day:<?php echo $finalResult['birthday'] ?><br/>
Address:<?php echo $finalResult['address'] ?><br/>
<?php }else{
    echo "No Data.";
}?>

<!--secondary Data -->

<h2>Secondary Section</h2>

NID Number:<?php echo $finalResultSecondary['nid_number'] ?><br/>
Current address:<?php echo $finalResultSecondary['current_address'] ?><br/>
Phone:<?php echo $finalResultSecondary['phone'] ?><br/>

<!--Crime Section -->
<h2> Crime History</h2>
<table border="1">
    <tr>
       <td>Serial No</td> <td>Crime Title</td><td>Crime Type</td><td>Sort description</td><td>Thana Name</td><td>Officer Zip Code</td>
    </tr>

<?php if(!empty($finalResultCrimeSection)) {
    $serial = 0;
    foreach ($finalResultCrimeSection as $singleCase) {
//        $debugObj->CheckData($singleCase);
//        die();
        $serial++;
        ?>
        <tr bgcolor="red">
            <td><?php echo $serial; ?></td>
            <td><?php echo $singleCase['crime_title'] ?></td>
            <td><?php echo $singleCase['crime_type'] ?></td>
            <td><?php echo $singleCase['description'] ?></td>
            <td><?php echo $singleCase['area_thana'] ?></td>
            <td><?php echo $singleCase['officer_zip'] ?></td>

        </tr>

        <?php

    }

}else{
    ?>
    <tr bgcolor="aqua">
        <td>No crime. The persons is Cline</td>
    </tr>
    <?php
}
    ?>


</table>

</body>
</head>
</html>

<?php }else{
    echo "No match found!";
} ?>
