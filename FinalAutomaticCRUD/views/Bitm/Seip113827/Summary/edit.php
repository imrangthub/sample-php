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
use App\Bitm\Seip113827\Summary\summarys;
$debug=new debugs();
$summarysObj=new summarys();

$id=$_GET['id'];
$oneSummary=$summarysObj->singleShow($id);

?>

<html>
<body>


<form action="update.php" method="post">
    <fieldset>
        <legend>Summary </legend>

        <form action="update.php" method="POST">

            <label for="tilte">Name of Organization:</label></br>
            <input type="text" name="title" id="title" placeholder="Name" required value="<?php echo $oneSummary['title'] ?>"></br>
            <label for="summary">Summary of Organizations:</label></br>
            <input type="text" name="summary" value="<?php echo $oneSummary['summary'] ?>"></br>
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="submit" value="Save" name="submit">
            <input type="reset" value="reset">
        </form>

<a href="index.php" ><input type="button" value="Back to Book"/></a>



</body>

</html>
