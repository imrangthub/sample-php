<?php
session_start();
?>
<html>
<head>
    <title>Book</title>
</head>
<body><h1 align="center">Welcome to Book page</h1>

<table border="1" align="center">
    <tr>
        <td><a href="create.php">Add your Book</a></td>
        <td><a href="trashed.php ">All Data</a></td>
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

$allBooks=$booksObj->index();
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
        <th>Writer</th>
        <th>Action</th>
    </tr>
    <?php
    if(isset($allBooks)&& !empty($allBooks)){
        $serial=0;
        foreach($allBooks as $singleBook){
            $serial++;
            ?>
            <tr>
                <td>
                    <?php echo $serial ?>
                </td>
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
                    <a href="show.php? id=<?php echo $singleBook['id'] ?>">Show</a> |
                    <a href="edit.php? id=<?php echo $singleBook['id'] ?>">Edit</a>|
                    <!--            <a href="delete.php? id=--><?php //echo $singleMobile['id'] ?><!--">S_Delete</a>-->
                    <a href="trash.php? id=<?php echo $singleBook['id'] ?>">S_Delete</a>
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
