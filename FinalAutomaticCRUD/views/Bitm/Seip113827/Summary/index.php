<?php
session_start();
?>
<html>
<head>
    <title>Birth|Day</title>
</head>
<body><h1 align="center">Welcome to Summary</h1>

<table border="1" align="center">
    <tr>
        <td><a href="create.php">Add your summary</a></td>
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
$summaryObj=new summarys();

$allsummary=$summaryObj->index();

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
    if(isset($allsummary)&& !empty($allsummary)){
        $serial=0;
        foreach($allsummary as $singleSummary){
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
                    <?php echo $singleSummary['summary'] ?>
                </td>
                <td>
                    <a href="show.php? id=<?php echo $singleSummary['id'] ?>">Show</a> |
                    <a href="edit.php? id=<?php echo $singleSummary['id'] ?>">Edit</a>|
                    <a href="trash.php? id=<?php echo $singleSummary['id'] ?>">S_Delete</a>
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

