<?php
session_start();
?>
<html>
<head>
    <title>Terms | condition</title>
</head>
<body><h1 align="center">Welcome to Terms | condition page</h1>

<table border="1" align="center">
    <tr>
        <td><a href="create.php">Add more data</a></td>
        <td><a href="trashed.php ">All Data</a></td>
        <td colspan="2" align="center"><a href="../../../../index.php">Back to Home</a></td>
    </tr>
</table>
</body>
</html>

<?php
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\TermsCondition\termsConditions;
$debug=new debugs();
$termsConditionObj=new termsConditions();


$AllTmCondition=$termsConditionObj->index();
//$debug->Debug($AllMobile);

if(isset($_SESSION["massege"])&& !empty($_SESSION["massege"])){
    echo $_SESSION["massege"];
    unset($_SESSION["massege"]);
}

?>

<table border="2">
    <tr>
        <th>Serial No</th>
        <th>ID</th>
        <th>Name</th>
        <th>Condition Status</th>
        <th>Action</th>
    </tr>
    <?php
    if(isset($AllTmCondition)&& !empty($AllTmCondition)){
        $serial=0;
        foreach($AllTmCondition as $singleTmCondition){
            $serial++;
            ?>
            <tr>
                <td>
                    <?php echo $serial ?>
                </td>
                <td>
                    <?php echo $singleTmCondition['id'] ?>
                </td>
                <td>
                    <?php echo $singleTmCondition['title'] ?>
                </td>
                <td>
                    <?php echo $singleTmCondition['conditionAggery'] ?>
                </td>
                <td>
                    <a href="show.php? id=<?php echo $singleTmCondition['id'] ?>">Show</a> |
                    <a href="edit.php? id=<?php echo $singleTmCondition['id'] ?>">Edit</a>|
                    <a href="trsah.php? id=<?php echo $singleTmCondition['id'] ?>">S_Deleted</a>|
                </td>
            </tr>
        <?php } ?>
    <?php }else{

        ?><tr>
        <td colspan="4" align="center" bgcolor="red">
            <?php echo "No Data." ?>
        </td>
        </tr><?php

    } ?>



</table>
