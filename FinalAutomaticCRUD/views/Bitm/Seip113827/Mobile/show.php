<html>
<head>
    <title>MOBILE</title>
</head>
<body><h1 align="center">Welcome to MOBILE page</h1>

<table border="1" align="center">
    <tr>
        <td><a href="create.php">Add your Mobile</a></td>
        <td colspan="2" align="center"><a href="../../../../index.php">Back to Home</a></td>
    </tr>
</table>
</body>
</html>
<?php
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\Mobile\mobiles;
$debug=new debugs();
$mobileObj=new mobiles();

$mydata=$_GET['id'];


$singleMobile=$mobileObj->singleShow($mydata);

?>
<table border="2">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Action</th>
    </tr>
    <tr>

        <td>
            <?php echo $singleMobile['id'] ?>
        </td>
        <td>
            <?php echo $singleMobile['title'] ?>
        </td>
        <td>
            <a href="edit.php? id=<?php echo $singleMobile['id'] ?>">Edit</a>|
            <a href="delete.php? id=<?php echo $singleMobile['id'] ?>">P_Delete</a>
        </td>
    </tr>

</table></br>

<a href="index.php" ><input type="button" value="Back to Mobile"/></a>

