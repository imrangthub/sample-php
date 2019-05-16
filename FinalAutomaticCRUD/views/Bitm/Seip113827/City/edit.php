<?php
session_start();
if (isset($_SESSION['Message'])) {
    echo $_SESSION['Message'];
    unset($_SESSION['Message']);
}
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\City\citys;
$debug=new debugs();
$citysObj=new citys();
$myID=$_GET['id'];

$singleCity=$citysObj->singleShow($myID);
?>

<html>
<title>City</title>
<body>
<fieldset>
    <legend>Update User</legend>
    <form action="update.php" method="POST">
        <label>User name</label>
        <input type="text" name="title" value="<?php echo $singleCity['title'] ?>"></br>
        <label > Select City </label>

        <select name="city">
        <option value="Dhaka" <?php if($singleCity['city'] == 'Dhaka'){?>selected<?php }?>>Dhaka</option>
        <option value="Comilla" <?php if($singleCity['city'] == 'Comilla'){?>selected<?php }?>>Comilla</option>
        <option value="Chuadanga" <?php if($singleCity['city'] == 'Chuadanga'){?>selected<?php }?> >Chuadanga</option>
        <option value="Bogra" <?php if($singleCity['city'] == 'Bogra'){?>selected<?php }?>>Bogra</option>
        <option value="Savar" <?php if($singleCity['city'] == 'Savar'){?>selected<?php }?>>Savar</option>
        <option value="Rangpur" <?php if($singleCity['city'] == 'Rangpur'){?>selected<?php }?>>Rangpur</option>
        </select></br></br>
        <input type="hidden" name="id" value="<?php echo $singleCity['id']?>"/>
        <input type="submit" value="Save">
        <input type="reset" value="reset">

    </form>

</fieldset>
</br>
<a href="index.php">Back to City</a>



</body>
</html>