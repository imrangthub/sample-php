<html>
<head>
    <title>Book</title>
</head>
<body><h1 align="center">Welcome to Birthday page</h1>

<table border="1" align="center">
    <tr>
        <td><a href="create.php">Add your Birthday</a></td>
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
$myID=$_GET['id'];

$singleImgss=$profilesObj->singleShow($myID);



?>

<form action="update.php" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Update your Information.</legend>
        Name:
        <input type="text" name="title" value="<?php echo $singleImgss['title'] ?>"/></br>
        Image:
        <img src="../../../../img/<?php echo $singleImgss['profilepic'] ?>"/>
        <input type="file" name="profilepic" value="<?php echo $singleImgss['profilepic'] ?>"></br>
        <input type="hidden" name="id" value="<?php echo $singleImgss['id']?>"/>
        <input type="submit" value="SAVE"/>


    </fieldset>
</form>
<a href="index.php" ><input type="button" value="Back to Birthday"/></a></br>
<?php
if(!empty($_SESSION['massege'])){
    echo $_SESSION['massege'];
    unset($_SESSION['massege']);
}
?>

<a href="index.php">Back to Profile Photo</a>

