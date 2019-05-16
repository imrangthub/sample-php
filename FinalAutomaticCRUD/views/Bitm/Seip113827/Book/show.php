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
use App\Bitm\Seip113827\Book\books;
$debug=new debugs();
$booksObj=new books();

$id=$_GET['id'];


$singleBook=$booksObj->singleShow($id);

?>
<table border="2">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Writer</th>
        <th>Action</th>
    </tr>
    <tr>

        <td>
            <?php echo $singleBook['id'] ?>
        </td>
        <td>
            <?php echo $singleBook['title'] ?>
        </td>
        <td>
            <?php echo $singleBook['writer'] ?>
        </td>
        <td>
            <a href="edit.php? id=<?php echo $singleBook['id'] ?>">Edit</a>|
            <a href="delete.php? id=<?php echo $singleBook['id'] ?>">P_Delete</a>
        </td>
    </tr>

</table></br>

<a href="index.php" ><input type="button" value="Back to Mobile"/></a>

