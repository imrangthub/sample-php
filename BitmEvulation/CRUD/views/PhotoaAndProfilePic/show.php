<?php
include_once('../../src/PhotoAndProfilePic/photoProfilePic.php');
include_once('../../src/Utility/debug.php');
$debugObj=new debug();
$photoPicObj=new photoProfilePic();
// $debugObj->checkData($_GET);
$id=$_GET['id'];

$singlePhoto=$photoPicObj->singleData($id);

//$debugObj->checkData($singlePhoto);
//die();


?>
<html>
<head>
    <style>
        #mainbody{
            width:800px;
            margin:3px auto;
            padding: 10px;
            background:lavender;
            margin-top: 10px;
            font-size:16px;
        }
        #sub{
            width:800px;
            height:200px;
            margin:3px auto;
            padding: 10px;
            background:lavender;
            margin-top: 10px;
            font-size:16px;
        }
    </style>
    <title>single | photo</title>
</head>
<body>
<div>
    <h1 align="center">Single photo</h1>
    <table align="center" bgcolor="#5f9ea0" border="0">
        <tr align="center">
            <td>Title</td>
            <td>Photo</td>
            <td>Action</td>
        </tr>
       <tr>
           <td><?php echo $singlePhoto['title'] ?></td>
           <td><img src="../../imgfiles/<?php echo $singlePhoto['pics'] ?>"></td>
           <td><a href="edit.php? id=<?php echo $singlePhoto['id'] ?>">edit</a> |
               <a href="trash.php? id=<?php echo $singlePhoto['id'] ?>">s_deleted</a>
           </td>
       </tr>

    </table>
</div>
<div id="sub">
    <table aligen="center">
        <tr>
            <td><a href="index.php">click </a> photo home.</td>

        </tr>
    </table>
</div>
</body>
</html>

