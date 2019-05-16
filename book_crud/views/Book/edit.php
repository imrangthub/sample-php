<?php
session_start();
include_once('../../src/Book/books.php');
$booksObj=new books();
$id=$_GET['id'];
$singleBook=$booksObj->singleData($id);
?>


<html>
<head>
    <title>Book | update</title>
    <style>
        #middle{
            width:500px;
            height: 300px;
            margin:3px auto;
            padding:10px;
            background:cornflowerblue;
            margin-top: 50px;
            font-size:16px;

        }
    </style>
</head>
<body>
<div id="middle";>
    <form action="update.php" method="post">
        <fieldset>
            <legend>update book </legend>
            <table border="0">
                <tr>
                    <td>Book Name:</td><td><input type="text" name="title" value="<?php echo $singleBook['title'] ?>"> </td>
                </tr>
                <tr>
                    <td>Authority:</td><td><input type="text" name="authority" value="<?php echo $singleBook['authority'] ?>" </td>
                </tr>
                <tr>
                    <td></td><td align="right"><input type="submit" value="SAVE"></td>
                </tr>
            </table>
            <input type="hidden" name="id" value="<?php echo $id ?>">
        </fieldset>
    </form>
    <?php
    if(!empty($_SESSION['msgUpdate'])){
        echo $_SESSION['msgUpdate'];
        unset($_SESSION['msgUpdate']);
    }
    ?>
</div>
</body>
</html>