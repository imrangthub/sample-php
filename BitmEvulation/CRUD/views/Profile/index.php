<?php
include_once('../../src/Profile/profiles.php');
include_once('../../src/Utility/debug.php');
$debugObj=new debug();
$profileObj=new profiles();
$profilePhoto=$profileObj->getProfilePic();
//$debugObj->checkData($profilePhoto);
$NameGenderBirthdayData=$profileObj->NameGenderBirthdayData();
//$debugObj->checkData($NameGenderBirthdayData);






?>
<html>
<head>
    <title>profile</title>
    <style>
        #mainbody{
            width:600px;
            height: 500px;
            margin:3px auto;
            padding: 10px;
            background:#e7e0ff;
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
        #img{
            width:205px;
            height: 205px;
            margin-left:350px;
            padding:5px;
            background:#39acff;
            font-size:16px;

        }
    </style>
</head>
<body>
<div id="mainbody">
    <h1 align="center">Student Profile.</h1>
      <div id="img">
          <img src="../../imgfiles/<?php echo $profilePhoto['pics'] ?>" width="200px" height="200px"/>
      </div>
    <table>
        <tr>
            <td>Name:</td><td><?php echo $NameGenderBirthdayData['title'] ?></td>
        </tr>
        <tr>
            <td>Gender:</td><td><?php echo $NameGenderBirthdayData['gender'] ?></td>
        </tr>
        <tr>
            <td>Birthday:</td><td><?php echo $NameGenderBirthdayData['birthday'] ?></td>
        </tr>
    </table>

</div>
<div id="sum";>
    <a href="../../index.php">click</a> for back to CRUD home.

</div>

</body>
</html>