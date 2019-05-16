<?php
include_once('../../src/Mobile/mobiles.php');
$mobileObj=new mobiles();
$allMobile=$mobileObj->trashed();
?>


<html>
<head>
    <title>Book</title>
    <style>
        #mainbody{
            width:600px;
            height: 400px;
            margin:3px auto;
            padding: 10px;
            background:lavender;
            margin-top: 10px;
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
<div id="mainbody">
    <h1 align="center">Deleted Book</h1>
    <table align="center" bgcolor="#f5f5dc" border="1" width="500px">
        <tr align="center">
            <td>Serial</td><td>ID</td><td>Model No</td><td>Manufacture</td><td>Action</td>
        </tr>
        <?php
        if(isset($allMobile) && !empty($allMobile)){
            $serial=0;
            foreach($allMobile as $singleMobile){
                $serial++;
                ?>
                <tr align="center">
                    <td><?php echo $serial ?></td>
                    <td><?php echo $singleMobile['id']?></td>
                    <td><?php echo $singleMobile['title'] ?></td>
                    <td><?php echo $singleMobile['manufacture'] ?></td>
                    <td><a href="show.php? id=<?php echo $singleMobile['id'] ?>">show</a> |
                        <a href="recover.php? id=<?php echo $singleMobile['id'] ?>">Recover</a> |
                        <a href="deleted.php? id=<?php echo $singleMobile['id'] ?>">P_deleted</a> </td>
                </tr>
                <?php
            }
        }
        ?>
    </table>
</div>
<div id="sub">
    <table bgcolor="#dcdcdc">
        <tr>
            <td> <a href="create.php">Click</a> for add Book.</td>
        </tr>
        <tr>
            <td> <a href="index.php">Click</a> for Home.</td>
        </tr>
    </table>

</div>

</body>
</html>