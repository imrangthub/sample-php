<?php
session_start();
?>
<html>
<head>
    <title>MOBILE</title>
</head>
<body><h1 align="center">Welcome to MOBILE page</h1>

<table border="1" align="center">
    <tr>
        <td><a href="create.php">Add your Mobile</a></td>
        <td><a href="trashed.php">All Data</a></td>
        <td colspan="2" align="center"><a href="../../../../index.php">Back to Home</a></td>
    </tr>
</table>
</body>
</html>

<?php
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\ProfilePic\profilePics;
$debug=new debugs();
$profilesObj=new profilePics();

$AllImages=$profilesObj->trashed();
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
        <th>Action</th>
    </tr>
    <?php
    if(isset($AllImages)&& !empty($AllImages)){
        $serial=0;
        foreach($AllImages as $singleImage){
            $serial++;
            ?>
            <tr>
                <td>
                    <?php echo $serial ?>
                </td>
                <td>
                    <?php echo $singleImage['id'] ?>
                </td>
                <td>
                    <?php echo $singleImage['title'] ?>
                </td>
                <td>
                    <img src="../../../../img/<?php echo $singleImage['profilepic'] ?>" height="200" width="200" />
                </td>
                <td>
                    <a href="show.php? id=<?php echo $singleImage['id'] ?>">Show</a> |
                    <a href="recover.php? id=<?php echo $singleImage['id'] ?>">Recovery</a>|
                    <a href="delete.php? id=<?php echo $singleImage['id'] ?>">P_Delete</a>
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
<a href="index.php" ><input type="button" value="Back to Mobile"/></a>
