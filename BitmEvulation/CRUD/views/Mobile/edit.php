<?php
include_once('../../src/Mobile/mobiles.php');
include_once('../../src/Utility/debug.php');
$mobilesObj=new mobiles();
$debugObj=new debug();
// $debugObj->checkData($_GET);
$id=$_GET['id'];
$oneMobile=$mobilesObj->singleData($id);
//$debugObj->checkData($oneMobile);
?>
<html>
<head>
    <title>Book</title>

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
            <legend>add mobile</legend>
            <table>
                <tr>
                    <td>Model No:</td><td><input type="text" name="title" value="<?php echo $oneMobile['title'] ?>"></td>
                </tr>
                <tr>
                    <td>Manufacture:</td><td><input type="text" name="manufacture" value="<?php echo $oneMobile['manufacture'] ?>"></td>
                </tr>
                <tr><td></td><td><input type="submit" value="SAVE"> </td></tr>
            </table>
            <input type="hidden" name="id" value="<?php echo $id ?>">
        </fieldset>
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





