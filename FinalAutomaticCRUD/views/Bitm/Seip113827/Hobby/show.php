<html>
<head>
    <title>Hobby</title>
</head>
<body><h1 align="center">Welcome to Hobby Single page</h1>

<table border="1" align="center">
    <tr>
        <td><a href="create.php">Add your Hobby</a></td>
        <td colspan="2" align="center"><a href="../../../../index.php">Back to Home</a></td>
    </tr>
</table>
</body>
</html>
<?php
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\Hobby\hobbys;
$debug=new debugs();
$hobbyObj=new hobbys();

$mydata=$_GET['id'];


$singleData=$hobbyObj->singleShow($mydata);

?>
<table border="2">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Hobby</th>
        <th>Action</th>
    </tr>
    <tr>

        <td>
            <?php echo $singleData['id'] ?>
        </td>
        <td>
            <?php echo $singleData['title'] ?>
        </td>
        <td>
            <?php echo $singleData['hobby'] ?>
        </td>
        <td>
            <a href="edit.php">Edit</a>|
            <a href="delete.php">P_Delete</a>
        </td>
    </tr>

</table>
<a href="index.php" ><input type="button" value="Back to Hobby"/></a></br>

