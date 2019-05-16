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

$profilesObj->deleted($myID);


?>


<?php
include_once '../../../../vendor/autoload.php"';
use App\bitm\seip111598\profilePhoto\profilePhoto;
$obj=new profilePhoto();

$imgName=$_FILES['image']['name'];
$img_link=$_FILES['image']['tmp_name'];
$_POST['image']=$imgName;
move_uploaded_file($img_link, "../../../../img/". $imgName );
if(!empty($_POST['image'])){
    unlink("../../../../img/". $_POST['delimg']);
}

//echo '<img src="../../../../img/'.$_POST['delimg'].' "/>';  unlink("../../../../img/". $imgName);
//echo "../../../../img/". $_POST['delimg'];
$obj->setval($_POST);
$obj->update();
//print_r($_POST);

