<?php
session_start();
?>
<html>
<head>
    <title>city</title>
</head>
<body><h1 align="center">Welcome to City page</h1>

<table border="1" align="center">
    <tr>
        <td><a href="create.php">Add your Data</a></td>
        <td><a href="trashed.php ">All Data</a></td>
        <td colspan="2" align="center"><a href="../../../../index.php">Back to Home</a></td>
    </tr>
</table>
</body>
</html>

<?php
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\City\citys;
$debug=new debugs();
$citysObj=new citys();

$AllCitys=$citysObj->index();
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
        <th>User Name</th>
        <th>User City</th>
        <th>Action</th>
    </tr>
    <?php
    if(isset($AllCitys)&& !empty($AllCitys)){
        $serial=0;
        foreach($AllCitys as $singleCity){
            $serial++;
            ?>
            <tr>
                <td>
                    <?php echo $serial ?>
                </td>
                <td>
                    <?php echo $singleCity['id'] ?>
                </td>
                <td>
                    <?php echo $singleCity['title'] ?>
                </td>
                <td>
                    <?php echo $singleCity['city'] ?>
                </td>
                <td>
                    <a href="show.php? id=<?php echo $singleCity['id'] ?>">Show</a> |
                    <a href="edit.php? id=<?php echo $singleCity['id'] ?>">Edit</a>|
                    <a href="trash.php? id=<?php echo $singleCity['id'] ?>">S_Delete</a>
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
