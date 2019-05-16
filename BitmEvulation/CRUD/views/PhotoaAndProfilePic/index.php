<?php
include_once('../../src/PhotoAndProfilePic/photoProfilePic.php');
include_once('../../src/Utility/debug.php');
$debugObj=new debug();
$photoPicObj=new photoProfilePic();

$allData=$photoPicObj->index();
$allPhoto=array_reverse($allData);

//$debugObj->checkData($allPhoto);
//die();

?>


<html>
<head>
    <title>Photo</title>
    <style>
        #mainbody{
            width:900px;
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
    <h1 align="center">Photo and Profile Pic.</h1>
    <table align="center"  border="1" width="700px">
        <tr align="center">
            <td>Serial</td>
            <td>ID</td>
            <td>Title</td>
            <td>Photo</td>
            <td>Action</td>
        </tr>
        <?php
        if(isset($allPhoto) && !empty($allPhoto)){
           $serial=0;
            foreach($allPhoto as $onePhoto){
                $serial++;
                ?>
                <tr>
                    <td><?php echo $serial ?></td>
                    <td><?php echo $onePhoto['id'] ?></td>
                    <td><?php echo $onePhoto['title']  ?></td>
                    <td><img src="../../imgfiles/<?php echo $onePhoto['pics'] ?>" width="300" height="300"/></td>
                    <td align="center">
                        <a href="show.php? id=<?php echo $onePhoto['id'] ?>">full size| </a>
                        <a href="edit.php? id=<?php echo $onePhoto['id'] ?>">edit |</a>
                        <a href="trash.php? id=<?php echo $onePhoto['id'] ?>">s_delete</a></br>
                        <a href="makeProfile.php? id=<?php echo $onePhoto['id'] ?>">set as profile photo</a></br>
                        <a href="../Profile/index.php">see profile</a>
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
            <td> <a href="create.php">Click</a> for add new photo..</td>
        </tr>
        <tr>
            <td> <a href="trashed.php">Click</a> for see deleted Item.</td>
        </tr>

    </table>
    </br>
    <table bgcolor="#dcdcdc">
        <tr>
            <td> <a href="../../index.php">Click</a> for Home.</td>
        </tr>
    </table>
</div>

</body>
</html>