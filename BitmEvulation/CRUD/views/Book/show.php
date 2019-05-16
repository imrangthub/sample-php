<?php
include_once('../../src/Book/books.php');
$booksObj=new books();
$id=$_GET['id'];
$singleBook=$booksObj->singleData($id);
?>


<html>
<head>
    <title>Book</title>
    <style>
        #mainbody{
            width:800px;
            height: 600px;
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
    <h1 align="center">Single Show</h1>
    <table align="center" bgcolor="#f5f5dc" border="1" width="500px">
        <tr align="center">
            <td>ID</td><td>Title</td><td>Authority</td><td>Action</td>
        </tr>
        <tr>
            <td><?php echo $singleBook['id'] ?></td>
            <td><?php echo $singleBook['title'] ?></td>
            <td><?php echo $singleBook['authority'] ?></td>
            <td><a href="edit.php? id=<?php echo $singleBook['id'] ?>">Edit |</a>
                <a href="delete.php? id=<?php echo $singleBook['id'] ?>">P_delete</a> </td>
        </tr>
        </table>
    <a href="index.php">click</a> back to home.
    </div>
</body>
</html>