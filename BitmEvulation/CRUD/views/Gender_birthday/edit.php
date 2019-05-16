<?php
include_once('../../src/Gender_birthday/genderBirthday.php');
include_once('../../src/Utility/debug.php');
$debugObj=new debug();
$genderBirthdayObj=new genderBirthday();
// $debugObj->checkData($_GET);
$id=$_GET['id'];
$onePerson=$genderBirthdayObj->singleShow($id);
//$debugObj->checkData($oneMobile);
?>
<html>
<head>
    <title>Person</title>

    <style>
        #middle{
            width:500px;
            height: 200px;
            margin:3px auto;
            padding:10px;
            background:cornflowerblue;
            margin-top: 50px;
            font-size:16px;

        }
        #sub{
            width: 500px;
            height: 100px;
            margin: auto;
            padding: 10px;
            background: #34b5ff;
        }
    </style>

</head>
<body>
<div id="middle";>
    <form action="update.php" method="post";>
        <fieldset>
            <legend>Update person</legend>
            <table>
                <tr>
                    <td>Name:</td><td><input type="text" name="title" value="<?php echo $onePerson['title'] ?>"></td>
                </tr>
                <tr>
                    <td>Birthday:</td><td><input type="text" name="birthday" value="<?php echo $onePerson['birthday'] ?>"></td>
                </tr>
                <tr>
                    <td>Gender:</td><td>
                        <input type="radio" name="gender" value="Male" <?php if($onePerson['gender']=="Male"){ echo "checked" ;  } ?>>Male</br>
                        <input type="radio" name="gender" value="Female" <?php if($onePerson['gender']=="Female"){ echo "checked";} ?>>Female</br>
                    </td>
                </tr>
                <tr><td><input type="reset" value="RESET"></td><td><input type="submit" value="SAVE"> </td></tr>
            </table>
            <input type="hidden" name="id" value="<?php echo $id ?>">
        </fieldset>
    </form>
    <?php
    session_start();
    if(!empty($_SESSION['msgStore'])){
        echo $_SESSION['msgStore'];
        unset($_SESSION['msgStore']);
    }
    ?>
</div>
<div id="sub">
    <table>
        <tr>
            <td><a href="index.php">click</a> for Gender and Birth day home. </td>
        </tr>
    </table>
</div>
</body>
</html>





