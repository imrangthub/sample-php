<?php
include_once('../../src/Mobile/mobiles.php');
include_once('../../src/Utility/debug.php');
$debugObj=new debug();
$mobilesObj=new mobiles();
$allMobiles=$mobilesObj->index();
//$debugObj->checkData($allMobiles);

?>

<html>
<head>
    <title>Mobile Home.</title>
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
</head>
<body>
<div id="mainbody">
    <h1 align="center"> Welcome to Mobile</h1>
    <table border="1" width="400px" bgcolor="#5f9ea0" align="center">
        <tr align="center">
            <td>Serial</td><td>ID</td><td>Manufacture</td><td>Model No</td><td>Action</td>
        </tr>
        <?php
        if(isset($allMobiles) && !empty($allMobiles)){
            $serial=0;
            foreach($allMobiles as $singleMobile){
                $serial++;
                ?>
                <tr aling="center">
                    <td><?php echo $serial ?></td>
                    <td><?php echo $singleMobile['id'] ?></td>
                    <td><?php echo $singleMobile['manufacture'] ?></td>
                    <td><?php echo $singleMobile['title'] ?></td>
                    <td><a href="show.php? id=<?php echo $singleMobile['id'] ?>">show</a> |
                        <a href="edit.php? id=<?php echo $singleMobile['id'] ?>">edit</a> |
                        <a href="trash.php? id=<?php echo $singleMobile['id'] ?>">s_delete</a>
                    </td>
                </tr>
        <?php
            }

        }
        ?>


    </table>
</div>
<div id="sub">
    <table align="center">
        <tr><td><a href="create.php">add</a> new Mobile. </td></tr>
        <tr><td><a href="trashed.php">see </a> deleted Mobile.</td></tr>
        <tr><td><a href="../../index.php">Back</a> to CRUD home.</td></tr>
    </table>
</div>
</body>
</html>
