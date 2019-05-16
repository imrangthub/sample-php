<html>
<head>
    <title>Book</title>
</head>
<body><h1 align="center">Welcome to Book page</h1>

<table border="1" align="center">
    <tr>
        <td><a href="create.php">Add your Book</a></td>
        <td colspan="2" align="center"><a href="../../../../index.php">Back to Home</a></td>
    </tr>
</table>
</body>
</html>
<?php
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\Birthday\birthdays;
$debug=new debugs();
$birthdayObj=new birthdays();

$id=$_GET['id'];


$singleBirthday=$birthdayObj->singleShow($id);

?>
<table border="2">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Birthday</th>
        <th>Action</th>
    </tr>
    <tr>

        <td>
            <?php echo $singleBirthday['id'] ?>
        </td>
        <td>
            <?php echo $singleBirthday['title'] ?>
        </td>
        <td>
            <?php echo $singleBirthday['birthday'] ?>
        </td>
        <td>
            <a href="edit.php? id=<?php echo $singleBirthday['id'] ?>">Edit</a>|
            <a href="trash.php? id=<?php echo $singleBirthday['id'] ?>">S_Delete</a>
        </td>
    </tr>

</table></br>

<a href="index.php" ><input type="button" value="Back to Mobile"/></a>

