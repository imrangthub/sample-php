<?php
session_start()
?>
<?php
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\TermsCondition\termsConditions;
$debug=new debugs();
$termsConditionObj=new termsConditions();

$myID=$_GET['id'];

$singleData=$termsConditionObj->singleShow($myID);




?>
<html>
<head>
    <title>Terms & conditionn|page</title>
</head>
<body><h1 align="center"></h1>

<form action="update.php" method="post">
    <fieldset>
        <legend>Update Terms & conditionn</legend>
       User Name:
        <input type="text" name="title" value="<?php echo $singleData['title']?>"></br>
        I acceptied<input type="checkbox" value="Yes" name="conditionAggery" <?php if(!empty($singleData['conditionAggery'])){echo 'checked';} ?>></br>
        <input type="hidden" name="id" value="<?php echo $singleData['id']?>"/>
        <input type="submit" value="SAVE"/>

    </fieldset>


</form>
<a href="index.php" ><input type="button" value="Back to Hobby"/></a></br>
<?php
if(!empty($_SESSION['massege'])){
    echo $_SESSION['massege'];
    unset($_SESSION['massege']);
}
?>



</body>
</html>