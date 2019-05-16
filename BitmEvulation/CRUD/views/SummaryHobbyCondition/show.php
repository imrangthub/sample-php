<?php
include_once('../../src/Utility/debug.php');
include_once('../../src/SummaryHobbyCondition/summaryHobbyCondition.php');
$debugObj=new debug();
$summaryHobbyConditionObj=new summaryHobbyCondition();
$id=$_GET['id'];
$onePerson=$summaryHobbyConditionObj->singleData($id);
//$debugObj->checkData($onePerson);

?>


<html>
<head>
    <title>SumHobbCon</title>
    <style>
        #mainbody{
            width:800px;
            height: 400px;
            margin:3px auto;
            padding: 10px;
            background:#39acff;
            margin-top: 10px;
            font-size:16px;
        }
        #sum{
            width:800px;
            height: 150px;
            margin:3px auto;
            padding: 10px;
            background:#39acff;
            margin-top: 10px;
            font-size:16px;

        }
    </style>
</head>
<body>
<div id="mainbody">
    <h1 align="center">Summary hobby and Condition.</h1>
    <table align="center" bgcolor="#f5f5dc" border="1" width="700px">
        <tr align="center">
            <td>Customer Name</td>
            <td>Hobby</td>
            <td>Summary</td>
            <td>Condition</td>
            <td>Action</td>
        </tr>
        <?php
        if(!empty($onePerson)){
            ?>
            <tr>
                <td>
                    <?php echo $onePerson['title'] ?>
                </td>
                <td>
                    <?php echo $onePerson['hobby'] ?>
                </td>
                <td>
                    <?php echo $onePerson['summary'] ?>
                </td>
                <td>
                    <?php echo $onePerson['condition_at'] ?>
                </td>
                <td>
                    <a href="edit.php? id=<?php echo $onePerson['id'] ?>">edit |</a>
                    <a href="trash.php? id=<?php echo $onePerson['id'] ?>">s_delete</a>
                </td>
            </tr>
        <?php
        }

        ?>




    </table>
</div>
<div id="sum";>
    <table bgcolor="#dcdcdc">
        <tr>
            <td> <a href="edit.php">Click</a> for add new person.</td>
        </tr>
        <tr>
            <td> <a href="trashed.php">Click</a> for see deleted person.</td>
        </tr>

    </table>
    </br>
    <table bgcolor="#dcdcdc">
        <tr>
            <td> <a href="index.php">Click</a> for home.</td>
        </tr>
    </table>
</div>

</body>
</html>