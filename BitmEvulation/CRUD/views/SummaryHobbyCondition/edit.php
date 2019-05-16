<?php
include_once('../../src/Utility/debug.php');
include_once('../../src/SummaryHobbyCondition/summaryHobbyCondition.php');
$debugObj=new debug();
$summaryHobbyConditionObj=new summaryHobbyCondition();
$id=$_GET['id'];
$onePerson=$summaryHobbyConditionObj->singleData($id);
//$debugObj->checkData($onePerson);
//die();
$hobbys=explode(',',$onePerson['hobby']);

?>

<html>
<head>
    <title>SummHobbCondit</title>

    <style>
        #middle{
            width:500px;
            height: 400px;
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
            <legend>Update student</legend>
            <table>
                <tr>
                    <td>Name:</td><td><input type="text" name="title" value="<?php echo $onePerson['title'] ?>"></td>
                </tr>
                <tr>
                    <td>Hobby:</td>
                    <td>
                        <input type="checkbox" name="hobby[]" value="programming" <?php if(in_array("programming",$hobbys)){echo 'checked';}?>>Programmibg</br>
                        <input type="checkbox" name="hobby[]" value="networking"<?php if(in_array("networking",$hobbys)){echo 'checked'; } ?>>Networking</br>
                        <input type="checkbox" name="hobby[]" value="designing"<?php if(in_array("designing",$hobbys)){ echo 'checked'; } ?>>Designing</br>
                    </td>
                </tr>
                <tr>
                    <td>Summary:</td>
                    <td>
                        <textarea cols="50" rows="6" name="summary"   placeholder="<?php echo $onePerson['summary'] ?>"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>I accepted:
                        <input type="checkbox" name="condition" value="agree"<?php if(!empty($onePerson['condition_at'])){ echo 'checked'; } ?>></td>
                </tr>
                <tr><td></td><td><input type="submit" value="SAVE"> </td></tr>
            </table>
        </fieldset>

        <input type="hidden" name="id" value="<?php echo $id ?>">
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
            <td><a href="index.php">click</a> for  home. </td>
        </tr>
    </table>
</div>
</body>
</html>





