<?php
session_start();
?>
<html>
<head>
    <title>Birth|Day</title>
</head>
<body><h1 align="center">Welcome to Birth Day page</h1>

<table border="1" align="center">
    <tr>
        <td><a href="create.php">Add your Birthday</a></td>
        <td><a href="trashed.php ">All Data</a></td>
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

$allbirthday=$birthdayObj->index();

?>

<table border="2">
    <tr>
        <th>Serial No</th>
        <th>ID</th>
        <th>Title</th>
        <th>Birthday</th>
        <th>Action</th>
    </tr>
    <?php
    if(isset($allbirthday)&& !empty($allbirthday)){
        $serial=0;
        foreach($allbirthday as $singleBirthday){
            $serial++;
            ?>
            <tr>
                <td>
                    <?php echo $serial ?>
                </td>
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
                    <a href="show.php? id=<?php echo $singleBirthday['id'] ?>">Show</a> |
                    <a href="edit.php? id=<?php echo $singleBirthday['id'] ?>">Edit</a>|
                    <a href="trash.php? id=<?php echo $singleBirthday['id'] ?>">S_Delete</a>
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

