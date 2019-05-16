<html>
<head>
    <title>Book</title>
</head>
<body><h1 align="center">Welcome to email page</h1>

<table border="1" align="center">
    <tr>
        <td><a href="create.php">Add your Email</a></td>
        <td colspan="2" align="center"><a href="../../../../index.php">Back to Home</a></td>
    </tr>
</table>
</body>
</html>
<?php
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\Email\emails;
$debug=new debugs();
$emailsObj=new emails();

$id=$_GET['id'];


$singleEmail=$emailsObj->singleShow($id);

?>
<table border="2">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <tr>

        <td>
            <?php echo $singleEmail['id'] ?>
        </td>
        <td>
            <?php echo $singleEmail['title'] ?>
        </td>
        <td>
            <?php echo $singleEmail['email'] ?>
        </td>
        <td>
            <a href="edit.php? id=<?php echo $singleEmail['id'] ?>">Edit</a>|
            <a href="trash.php? id=<?php echo $singleEmail['id'] ?>">S_Delete</a>
        </td>
    </tr>

</table></br>

<a href="index.php" ><input type="button" value="Back to Mobile"/></a>

