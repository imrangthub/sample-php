<?php
include_once('../../src/Book/books.php');
$booksObj=new books();
$allBooks=$booksObj->index();
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
    <h1 align="center">Book</h1>
    <table align="center" bgcolor="#f5f5dc" border="1" width="500px">
        <tr align="center">
            <td>Serial</td><td>ID</td><td>Title</td><td>Authority</td><td>Action</td>
        </tr>
        <?php
       if(isset($allBooks) && !empty($allBooks)){
           $serial=0;
           foreach($allBooks as $singleBook){
               $serial++;
               ?>
        <tr align="center">
            <td><?php echo $serial ?></td>
            <td><?php echo $singleBook['id']?></td>
            <td><?php echo $singleBook['title'] ?></td>
            <td><?php echo $singleBook['authority'] ?></td>
            <td><a href="show.php? id=<?php echo $singleBook['id'] ?>">show</a> |
                <a href="edit.php? id=<?php echo $singleBook['id'] ?>">Edit</a> |
                <a href="trash.php? id=<?php echo $singleBook['id'] ?>">S_deleted</a> </td>
        </tr>
            <?php
           }
       }
        ?>
    </table>
    <table bgcolor="#dcdcdc">
        <tr>
            <td> <a href="create.php">Click</a> for add Book.</td>
        </tr>
        <tr>
            <td> <a href="trashed.php">Click</a> for deleted Book.</td>
        </tr>

    </table>

</div>

</body>
</html>