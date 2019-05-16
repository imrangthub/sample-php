<?php
include_once('../../src/Gender_birthday/genderBirthday.php');
include_once('../../src/Utility/debug.php');
$debugObj=new debug();
$genderBirthdayObj=new genderBirthday();
$allPerson=$genderBirthdayObj->index();
//$debugObj->checkData($allPerson);
//echo $allPerson[0]['id'];



?>

<html>
<head>
    <title>Gender and Birthday.</title>
    <style>
        #mainbody{
            width:800px;
            height:400px;
            margin:3px auto;
            padding: 10px;
            background:lavender;
            margin-top: 10px;
            font-size:16px;
        }
        #sub{
            width:600px;
            height:200px;
            margin:3px auto;
            padding: 10px;
            background:lavender;
            margin-top: 10px;
            font-size:16px;
        }
    </style>
</head>
<body>
<div id="mainbody">
    <h1 align="center"> Welcome to Gender and Birthday.</h1>
    <table border="1" width="600px" bgcolor="#5f9ea0" align="center">
        <tr align="center">
            <td>Serial</td>
            <td>ID</td>
            <td>Name</td>
            <td>Gender</td>
            <td>Birthday</td>
            <td>Action</td>
        </tr>
        <?php
        if(!empty($allPerson)) {
            $serial = 0;
            foreach ($allPerson as $singlePerson) {
                  $serial ++;
                ?>
                <tr>
                    <td><?php echo $serial ?></td>
                    <td><?php echo $singlePerson['id'] ?></td>
                    <td><?php echo $singlePerson['title'] ?></td>
                    <td><?php echo $singlePerson['gender'] ?></td>
                    <td><?php echo $singlePerson['birthday'] ?></td>
                    <td><a href="show.php? id=<?php echo $singlePerson['id'] ?>">show |</a>
                        <a href="edit.php? id=<?php echo $singlePerson['id'] ?>">edit |</a>
                        <a href="makeProfile.php? id=<?php echo $singlePerson['id'] ?>">as profile |</a>
                        <a href="trash.php? id=<?php echo $singlePerson['id'] ?>">s_delete</a></td>
                </tr>
                <?php
            }
        }
        ?>

    </table>
</div>
<div id="sub">
    <table align="center">
        <tr><td><a href="create.php">add</a> new person. </td></tr>
        <tr><td><a href="trashed.php">see </a> deleted person.</td></tr>
        <tr><td><a href="../../index.php">Back</a> to CRUD home.</td></tr>
    </table>
</div>
</body>
</html>
