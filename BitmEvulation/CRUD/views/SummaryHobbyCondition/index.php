<?php
include_once('../../src/SummaryHobbyCondition/summaryHobbyCondition.php');
include_once('../../src/Utility/debug.php');
$debugObj=new debug();
$summaryHobbyConditionObj=new summaryHobbyCondition();
$allPerson=$summaryHobbyConditionObj->index();
//$debugObj->checkData($allPerson);


?>


<html>
<head>
    <title>SumHobbCon</title>
    <style>
        #mainbody{
            width:900px;
            height: 400px;
            margin:3px auto;
            padding: 10px;
            background:#39acff;
            margin-top: 10px;
            font-size:16px;
        }
        #sum{
            width:900px;
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
    <table align="center" bgcolor="#f5f5dc" border="1" width="800px">
        <tr align="center">
            <td>Serial</td>
            <td>ID</td>
            <td>Customer Name</td>
            <td>Hobby</td>
            <td>Summary</td>
            <td>Condition</td>
            <td>Action</td>
        </tr>
        <?php
        if(isset($allPerson) && !empty($allPerson)){
            $serial=0;
            foreach($allPerson as $onePerson){
                $serial++;
                ?>
                <tr>
                    <td><?php echo $serial ?></td>
                    <td><?php echo $onePerson['id'] ?></td>
                    <td><?php echo $onePerson['title'] ?></td>
                    <td><?php echo $onePerson['hobby'] ?></td>
                    <td><?php echo $onePerson['summary'] ?></td>
                    <td><?php echo $onePerson['condition_at'] ?></td>
                    <td>
                        <a href="show.php? id=<?php echo $onePerson['id'] ?>">show |</a>
                        <a href="edit.php? id=<?php echo $onePerson['id'] ?>">edit |</a>
                        <a href="trash.php? id=<?php echo $onePerson['id'] ?>">s_delete</a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>


    </table>
</div>
<div id="sum";>
    <table bgcolor="#dcdcdc">
        <tr>
            <td> <a href="create.php">Click</a> for add new person.</td>
        </tr>
        <tr>
            <td> <a href="trashed.php">Click</a> for see deleted person.</td>
        </tr>

    </table>
    </br>
    <table bgcolor="#dcdcdc">
        <tr>
            <td> <a href="../../index.php">Click</a> for CRUD Home.</td>
        </tr>
    </table>
</div>

</body>
</html>