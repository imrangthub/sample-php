<?php
session_start();
?>
<html>
<head>
    <title>summary</title>
</head>
<body><h1 align="center">Welcome to Summary page</h1>

<table border="1" align="center">
    <tr>
        <td><a href="create.php">Add your Summary</a></td>
        <td><a href="trashed.php ">All Data</a></td>
        <td colspan="2" align="center"><a href="../../../../index.php">Back to Home</a></td>
    </tr>
</table>
</body>
</html>

<?php
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\Summary\summarys;
$debug=new debugs();
$summarysObj=new summarys();

$allSummarys=$summarysObj->trashed();
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
        <th>Title</th>
        <th>Summary</th>
        <th>Action</th>
    </tr>
    <?php
    if(isset($allSummarys)&& !empty($allSummarys)){
        $serial=0;
        foreach($allSummarys as $singleSummary){
            $serial++;
            ?>
            <tr>
                <td>
                    <?php echo $serial ?>
                </td>
                <td>
                    <?php echo $singleSummary['id'] ?>
                </td>
                <td>
                    <?php echo $singleSummary['title'] ?>
                </td>
                <td>
                    <?php echo $singleSummary['summary']?>
                </td>
                <td>
                    <a href="show.php? id=<?php echo $singleSummary['id'] ?>">Show</a> |
                    <a href="recover.php? id=<?php echo $singleSummary['id'] ?>">Recovery</a>|
                    <a href="delete.php? id=<?php echo $singleSummary['id'] ?>">P_Delete</a>
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



</table></br>
<a href="index.php" ><input type="button" value="Back to Book"/></a>
