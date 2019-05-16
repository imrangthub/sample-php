<?php
session_start()
?>
<?php
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\Hobby\hobbys;
$debug=new debugs();
$hobbyObj=new hobbys();

$mydata=$_GET['id'];

$singleData=$hobbyObj->singleShow($mydata);

$hobbys=explode(',',$singleData['hobby']);



?>
<html>
<head>
    <title>Hobby|page</title>
</head>
<body><h1 align="center"></h1>

<form action="update.php" method="post">
    <fieldset>
        <legend>Inseart your Hobby</legend>
        Name:
        <input type="text" name="title" value="<?php echo $singleData['title']?>"></br>
        <input type="checkbox" name="hobby[]" value="programming" <?php if(in_array("programming",$hobbys)){echo 'checked';} ?> >Programmibg</br>
        <input type="checkbox" name="hobby[]" value="networking" <?php if(in_array("networking",$hobbys)){echo 'checked';} ?>>Networking</br>
        <input type="checkbox" name="hobby[]" value="degsin" <?php if(in_array("degsin",$hobbys)){echo 'checked';} ?>>Degesin.</br>
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