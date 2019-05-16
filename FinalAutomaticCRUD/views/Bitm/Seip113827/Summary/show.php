<html>
<head>
    <title>Summary</title>
</head>
<body><h1 align="center">Welcome to Summary page</h1>

<table border="1" align="center">
    <tr>
        <td><a href="create.php">Add your Summary</a></td>
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

$id=$_GET['id'];


$singleSummary=$summarysObj->singleShow($id);

?>
<table border="2">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Summary</th>
        <th>Action</th>
    </tr>
    <tr>

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
            <a href="edit.php? id=<?php echo $singleSummary['id'] ?>">Edit</a>|
            <a href="trash.php? id=<?php echo $singleSummary['id'] ?>">S_Delete</a>
        </td>
    </tr>

</table></br>

<a href="index.php" ><input type="button" value="Back to Mobile"/></a>

