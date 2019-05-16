<html>
<head>
    <title>MOBILE</title>
</head>
<body><h1 align="center">Welcome to MOBILE page</h1>

<table border="1" align="center">
    <tr>
        <td><a href="create.php">Add your Mobile</a></td>
        <td colspan="2" align="center"><a href="../../../../index.php">Back to Home</a></td>
    </tr>
</table>
</body>
</html>
<?php
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\Mobile\mobiles;
$debug=new debugs();
$mobileObj=new mobiles();

$id=$_GET['id'];
$oneData=$mobileObj->singleShow($id);

?>

<html>
<body>


<form action="update.php" method="post">
    <fieldset>
        <legend>Insert Mobile</legend>

        Mobile Name:
        <input type="text" name="title" value="<?php echo $oneData['title'] ?>">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" value="SAVE">


    </fieldset>
</form>
<a href="index.php" ><input type="button" value="Back to Mobile"/></a>



</body>

</html>
