<?php
session_start();
?>
<html>
<head>
    <title>MOBILE</title>
</head>
<body><h1 align="center">Welcome to Hobby page</h1>

<table border="1" align="center">
    <tr>
        <td><a href="create.php">Add your Hobby</a></td>
        <td><a href="trashed.php ">All Data</a></td>
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

$Allhobby=$hobbyObj->trashed();


if(isset($_SESSION["massege"])&& !empty($_SESSION["massege"])){
    echo $_SESSION["massege"];
    unset($_SESSION["massege"]);
}

?>

<table border="2">
    <tr>
        <th>Serial No</th>
        <th>ID</th>
        <th>Name</th>
        <th>Hobby</th>
        <th>Action</th>
    </tr>
    <?php
    if(isset($Allhobby)&& !empty($Allhobby)){
        $serial=0;
        foreach($Allhobby as $singleHobby){
            $serial++;
            ?>
            <tr>
                <td>
                    <?php echo $serial ?>
                </td>
                <td>
                    <?php echo $singleHobby['id'] ?>
                </td>
                <td>
                    <?php echo $singleHobby['title'] ?>
                </td>
                <td>
                    <?php echo $singleHobby['hobby'] ?>
                </td>
                <td>
                    <a href="edit.php? id=<?php echo $singleHobby['id'] ?>">Edit</a>|
                    <a href="recover.php? id=<?php echo $singleHobby['id'] ?>">Recovery</a>|
                    <a href="delete.php? id=<?php echo $singleHobby['id'] ?>">P_Delete</a>
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



</table></br>
<a href="index.php" ><input type="button" value="Back to Hobby"/></a></br>
