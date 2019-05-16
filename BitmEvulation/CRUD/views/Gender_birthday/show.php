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
    <style>
        #mainbody{
            width:600px;
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
    <title>single | person.</title>
</head>
<body>
<div id="mainbody">
    <h1 align="center">Single person</h1>
    <table align="center" bgcolor="#5f9ea0" border="1" width="600">
        <tr align="center">
            <td>ID</td>
            <td>Name</td>
            <td>Gender</td>
            <td>Birthday</td>
            <td>Action</td>
        </tr>
        <tr>
            <td><?php echo $onePerson['id'] ?></td>
            <td><?php echo $onePerson['title'] ?></td>
            <td><?php echo $onePerson['gender'] ?></td>
            <td><?php echo $onePerson['birthday'] ?></td>
            <td><a href="edit.php? id=<?php echo $onePerson['id'] ?>">edit</a> |
                <a href="deleted.php"? id="<?php echo $onePerson['id'] ?>">p_deleted</a>
            </td>
        </tr>

    </table>
</div>
<div id="sub">
    <table aligen="center">
        <tr>
            <td><a href="index.php">click </a> Go to Mobile home.</td>

        </tr>
    </table>
</div>
</body>
</html>

