<?php

session_start();
if (isset($_SESSION['Message'])) {
    echo $_SESSION['Message'];
    unset($_SESSION['Message']);
}

include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\Gender\genders;
$debug=new debugs();
$gendersObj=new genders();
$myID=$_GET['id'];

$singleData=$gendersObj->singleShow($myID);


?>
<html>
<title>Gender</title>
<body>
<fieldset>
    <legend>Add Person</legend>
    <form action="update.php" method="POST">
        <label>Enter your name</label>
        <input type="text" name="title" value="<?php echo $singleData['title']?>"><br/>
        <label > Gender </label><br/>
        <input type="radio" name="gender" value="Male" <?php if($singleData['gender']=="Male"){ echo "checked" ;  } ?>>Male<br/>
        <input type="radio" name="gender" value="Female" <?php if($singleData['gender']=="Female"){ echo "checked" ;  } ?>>Female<br/>
        <input type="hidden" name="id" value="<?php echo $singleData['id']?>"/>
        <input type="submit" value="Save" name="submit">
        <input type="reset" value="reset">

    </form>

</fieldset>
</br>
<a href="index.php" ><input type="button" value="Back to Gender"/></a></br>


</body>
</html>