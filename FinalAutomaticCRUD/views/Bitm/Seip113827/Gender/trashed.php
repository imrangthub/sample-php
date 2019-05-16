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

$allGenders=$gendersObj->trashed();

?>

<table border="2">
    <tr>
        <th>Serial No</th>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Action</th>
    </tr>
    <?php
    if(isset($allGenders)&& !empty($allGenders)){
        $serial=0;
        foreach($allGenders as $singleGender){
            $serial++;
            ?>
            <tr>
                <td>
                    <?php echo $serial ?>
                </td>
                <td>
                    <?php echo $singleGender['id'] ?>
                </td>
                <td>
                    <?php echo $singleGender['title'] ?>
                </td>
                <td>
                    <?php echo $singleGender['gender'] ?>
                </td>
                <td>
                    <a href="show.php? id=<?php echo $singleGender['id'] ?>">Show</a> |
                    <a href="recover.php? id=<?php echo $singleGender['id'] ?>">Recover</a>|
                    <a href="delete.php? id=<?php echo $singleGender['id'] ?>">P_Delete</a>
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

