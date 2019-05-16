<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>Beauty</title>

    <style type="text/css" media="all">
        @import "../../../../beauty.css";
    </style>
</head>

<body>
<div id="farouter">
    <div id="outer">
        <div id="wrap">
            <div id="headermain">

                <h1 id="header">Beauty</h1>
                <h2 id="tagline">A thing of <b>Beauty</b> is a joy <em>forever ...</em></h2>
            </div>

            <div id="hmenu">
                <div id="hnav">

                    <ul id="navlist">
                        <li><a href="">Mobile</a></li>
                        <li><a href="">Book</a></li>
                        <li><a href="">Gender</a></li>
                        <li><a href="">Birth Day</a></li>
                        <li><a href="">Email</a></li>
                        <li><a href="">Hobby</a></li>
                        <li><a href="">City</a></li>
                        <li><a href="">Summary</a></li>
                        <li><a href="">Teram condition</a></li>
                        <li><a href="">Profile Picture</a></li>
                    </ul>


                </div></div>


            <div id="mainbody">

            <?php
            include_once('../../../../vendor/autoload.php');
            use App\Bitm\Seip113827\Utility\debugs;
            use App\Bitm\Seip113827\Mobile\mobiles;
            $debug=new debugs();
            $mobileObj=new mobiles();

            $AllMobile=$mobileObj->index();
            //$debug->Debug($AllMobile);

            if(isset($_SESSION["massege"])&& !empty($_SESSION["massege"])){
                echo $_SESSION["massege"];
                unset($_SESSION["massege"]);
            }

            ?>

            <table border="2" align="center">
                <tr>
                    <th>Serial No</th>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
                <?php
                if(isset($AllMobile)&& !empty($AllMobile)){
                    $serial=0;
                    foreach($AllMobile as $singleMobile){
                        $serial++;
                        ?>
                        <tr>
                            <td>
                                <?php echo $serial ?>
                            </td>
                            <td>
                                <?php echo $singleMobile['id'] ?>
                            </td>
                            <td>
                                <?php echo $singleMobile['title'] ?>
                            </td>
                            <td>
                                <a href="show.php? id=<?php echo $singleMobile['id'] ?>">Show</a> |
                                <a href="edit.php? id=<?php echo $singleMobile['id'] ?>">Edit</a>|
                                <!--            <a href="delete.php? id=--><?php //echo $singleMobile['id'] ?><!--">S_Delete</a>-->
                                <a href="trash.php? id=<?php echo $singleMobile['id'] ?>">S_Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php }else{

                    ?><tr>
                    <td colspan="4" align="center" bgcolor="red">
                        <?php echo "No Data." ?>
                    </td>
                    </tr><?php

                } ?>



            </table>
                </div>

</body>
</html>
