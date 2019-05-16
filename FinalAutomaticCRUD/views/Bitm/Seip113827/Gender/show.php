<?php
session_start();
?>
<html>
<head>
    <title>Gender</title>
</head>
<body><h1 align="center">Welcome to Gender xxx page</h1>

<table border="1" align="center">
    <tr>
        <td><a href="create.php">Add your Person</a></td>
        <td><a href="trashed.php ">All Data</a></td>
        <td colspan="2" align="center"><a href="../../../../index.php">Back to Home</a></td>
    </tr>
</table>
</body>
</html>

<?php
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\Gender\genders;
$debug=new debugs();
$gendersObj=new genders();
$myID=$_GET['id'];


$singleData=$gendersObj->singleShow($myID);


?>

?>
<table border="2">
    <tr>
        <th>ID</th>
        <th>User name</th>
        <th>Gender</th>
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
            <?php echo $singleData['gender'] ?>
        </td>
        <td>
            <a href="edit.php">Edit</a>|
            <a href="trash.php">S_Delete</a>
        </td>
    </tr>

</table>
<a href="index.php" ><input type="button" value="Back to Home"/></a></br>

