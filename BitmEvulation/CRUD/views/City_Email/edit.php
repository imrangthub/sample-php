<?php
include_once('../../src/City_Email/cityEmails.php');
include_once('../../src/Utility/debug.php');
$debugObj=new debug();
$cityEmailsObj=new cityEmails();
$id=$_GET['id'];
$onePerson=$cityEmailsObj->singleShow($id);
?>
<html>
<head>
    <title>CityEmail</title>

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
            <legend>Update Customer</legend>
            <table>
                <tr>
                    <td>Customer Name:</td><td><input type="text" name="title" value="<?php echo $onePerson['title'] ?>"></td>
                </tr>
                <tr>
                    <td>Email:</td><td><input type="text" name="email" value="<?php echo $onePerson['emails'] ?>"></td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td>
                        <select name="city">
                            <option value="Dhaka"<?php if($onePerson['citys']=='Dhaka'){?>selected<?php }?>>Dhaka</option>
                            <option value="Comilla"<?php if($onePerson['citys']=='Comilla'){?>selected<?php }?>>Comilla</option>
                            <option value="Chuadanga"<?php if($onePerson['citys']=='Chuadanga'){?>selected<?php }?>>Chuadanga</option>
                            <option value="Bogra"<?php if($onePerson['citys']=='Bogra'){?>selected<?php }?>>Bogra</option>
                            <option value="Savar"<?php if($onePerson['citys']=='Savar'){?>selected<?php }?>>Savar</option>
                            <option value="Rangpur"<?php if($onePerson['citys']=='Rangpur'){?>selected<?php }?>>Rangpur</option>
                        </select>
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
            <td><a href="index.php">click</a> for home. </td>
        </tr>
    </table>
</div>
</body>
</html>





