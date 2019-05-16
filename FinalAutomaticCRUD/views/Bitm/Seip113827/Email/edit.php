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
use App\Bitm\Seip113827\Email\emails;
$debug=new debugs();
$emailsObj=new emails();

$id=$_GET['id'];
$oneEmail=$emailsObj->singleShow($id);

?>

<html>
<body>


<form action="update.php" method="post">
    <fieldset>
        <legend>Update Email</legend>

        Name:
        <input type="text" name="title" value="<?php echo $oneEmail['title'] ?>"></br>
        Email:
        <input type="text" name="email" value="<?php echo $oneEmail['email'] ?>"></br>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="submit" value="SAVE">


    </fieldset>
</form>
<a href="index.php" ><input type="button" value="Back to Email"/></a>



</body>

</html>
