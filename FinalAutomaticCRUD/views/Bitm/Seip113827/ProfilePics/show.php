<?php
session_start();
?>
<html>
<head>
    <title>Profile Pic</title>
</head>
<body><h1 align="center">Welcome to Profile Pic page</h1>

<table border="1" align="center">
    <tr>
        <td><a href="create.php">Add a Photo</a></td>
        <td><a href="trashed.php ">All Data</a></td>
        <td> <a href="myprofile.php">See Profile</a></td>
        <td colspan="2" align="center"><a href="../../../../index.php">Back to Home</a></td>
    </tr>
</table></br>
</body>
</html>

<?php
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\ProfilePic\profilePics;
$debug=new debugs();
$profilesObj=new profilePics();
$myID=$_GET['id'];

$singleImgss=$profilesObj->singleShow($myID);

//$debug->Debug($singleImgss);
//die();

?>

<table border="2">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Photo</th>
        <th>Action</th>
    </tr>
    <?php
    if(isset($singleImgss)&& !empty($singleImgss)){
            ?>
            <tr>
                <td>
                    <?php echo $singleImgss['id'] ?>
                </td>
                <td>
                    <?php echo $singleImgss['title'] ?>
                </td>
                <td>
                    <img src="../../../../img/<?php echo $singleImgss['profilepic'] ?>" height="200" width="200" />
                </td>
                <td>
                    <a href="show.php? id=<?php echo $singleImgss['id'] ?>">Show</a> |
                    <a href="setProfilePic.php?id=<?php echo $singleImgss['id'] ?>">Make Profile pic</a> |
                    <a href="edit.php? id=<?php echo $singleImgss['id'] ?>">Edit</a>|
                    <a href="trash.php? id=<?php echo $singleImgss['id'] ?>">S_Delete</a>|

                </td>
            </tr>
       <tr>
        <td colspan="4" align="center" bgcolor="red">
            <?php echo "No Data." ?>
        </td>
        </tr><?php

    } ?>



</table></br>
<a href="index.php">Back to Profile Photo</a>

