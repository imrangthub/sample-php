<?php
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\ProfilePic\profilePics;
$debug=new debugs();
$profilesObj=new profilePics();

$allImges=$profilesObj->showProfilePic();

    if(isset($allImges)&& !empty($allImges)){}
        foreach($allImges as $singleImg){}
            ?>

<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<style>

    #middle{
        width: 400px;
        height: 500px;
        margin:0px auto;
        padding: 10px;
        background:silver;
        margin-top: 50px;
        font-size: 16px;
        text-align: center;

    }

</style>

<body>
<div id="middle">
    <table border="0" align="center">
        <caption align="TOP">Photo</caption>
        <tr>
            <td align="right">
                <img src="../../../../img/<?php echo $singleImg['profilepic'] ?>" height="200" width="200" /></br>
            </td>
        </tr>
        <tr>
            <td>
               Name: <?php echo $singleImg['title'] ?>
            </td>
        </tr>
    </table><br/>
    <a href="index.php">Back to Home</a>
</div>


</body>
</html>