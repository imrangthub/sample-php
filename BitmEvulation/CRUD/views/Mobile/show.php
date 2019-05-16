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
    <title>single | mobile</title>
</head>
<body>
<div id="mainbody">
    <h1 align="center">Single Mobile</h1>
    <table align="center" bgcolor="#5f9ea0" border="1" width="600">
        <tr align="center">
            <td>ID</td><td>Model No</td><td>Manufacture</td><td>Action</td>
        </tr>
       <tr>
           <td><?php echo $oneMobile['id'] ?></td>
           <td><?php echo $oneMobile['title'] ?></td>
           <td><?php echo $oneMobile['manufacture'] ?></td>
           <td><a href="edit.php? id=<?php echo $oneMobile['id'] ?>">edit</a> |
               <a href="deleted.php"? id="<?php echo $oneMobile['id'] ?>">p_deleted</a>
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

