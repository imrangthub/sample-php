<?php
include_once('../../src/PhotoAndProfilePic/photoProfilePic.php');
include_once('../../src/Utility/debug.php');
$debugObj=new debug();
$photoPicObj=new photoProfilePic();
// $debugObj->checkData($_GET);
$id=$_GET['id'];
$onePhoto=$photoPicObj->singleData($id);
//$debugObj->checkData($onePhoto);
?>
<html>
<head>
    <title>Book</title>

    <style>
        #middle{
            width:800px;
            height: 600px;
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
    <form action="update.php" method="post" enctype="multipart/form-data">
        <table align="center">
            <tr>
                <td>Name: </td>
                <td><input type="text" name="title" value="<?php echo $onePhoto['title'] ?>"/></td>
            </tr>
            <tr>
                <td>Photo: </td>
                <td><img src="../../imgfiles/<?php echo $onePhoto['pics']?>" width="200" height="250"/></td>
            </tr>
            <td>Chose new Photo:</td>
            <td><input type="file" name="myPhoto"/></td>
            <tr>
                <td></td>
                <td><input type="submit" value="SAVE" /></td>
            </tr>
        </table>
        <input type="hidden" name="id" value="<?php echo $id ?>"/>
    </form>
    <?php
    session_start();
    if(!empty($_SESSION['msgUpdate'])){
        echo $_SESSION['msgUpdate'];
        unset($_SESSION['msgUpdate']);
    }
    ?>
</div>
<div id="sub">
    <table>
        <tr>
            <td><a href="index.php">click</a> for Mobile home. </td>
        </tr>
    </table>
</div>
</body>
</html>





