<?php
include_once('../../src/City_Email/cityEmails.php');
include_once('../../src/Utility/debug.php');
$debutObj=new debug();
$cityEmailObj=new cityEmails();
$allPerson=$cityEmailObj->index();
//$debutObj->checkData($allPerson);

?>


<html>
<head>
    <title>CityEmail</title>
    <style>
        #mainbody{
            width:800px;
            height: 400px;
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
    <h1 align="center">City and Email.</h1>
    <table align="center" bgcolor="#6495ed" border="1" width="700px">
        <tr align="center">
            <td>Serial</td>
            <td>ID</td>
            <td>Customer Name</td>
            <td>Email</td>
            <td>City</td>
            <td>Action</td>
        </tr>
        <?php
        if(isset($allPerson) && !empty($allPerson)){
            $serial=0;
            foreach($allPerson as $onePerson){
                $serial++;
                ?>
                <tr>
                    <td><?php echo $serial ?></td>
                    <td><?php echo $onePerson['id'] ?></td>
                    <td><?php echo $onePerson['title'] ?></td>
                    <td><?php echo $onePerson['emails'] ?></td>
                    <td><?php echo $onePerson['citys'] ?></td>
                    <td>
                        <a href="show.php? id=<?php echo $onePerson['id'] ?>">show |</a>
                        <a href="edit.php? id=<?php echo $onePerson['id'] ?>">edit |</a>
                        <a href="trash.php? id=<?php echo $onePerson['id'] ?>">s_delete</a>
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
            <td> <a href="create.php">Click</a> for add new customer.</td>
        </tr>
        <tr>
            <td> <a href="trashed.php">Click</a> for see deleted customer.</td>
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