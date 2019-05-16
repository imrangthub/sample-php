<?php
include_once('../../src/Book/books.php');
session_start();
?>
<html>
<head>
    <title>Book</title>

    <style>
        #middle{
            width:500px;
            height: 200px;
            margin:3px auto;
            padding:10px;
            background:cornflowerblue;
            margin-top: 50px;
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
<div id="middle";>
    <form action="store.php" method="post">
    <fieldset>
        <legend>add book </legend>
        <table border="0">
            <tr>
                <td>Book Name:</td><td><input type="text" name="title"> </td>
            </tr>
            <tr>
                <td>Authority:</td><td><input type="text" name="authority"</td>
            </tr>
            <tr>
                <td></td><td align="right"><input type="submit" value="SAVE"></td>
            </tr>
        </table>
    </fieldset>
        </form>
    <?php
    if(!empty($_SESSION['msgStore'])){
        echo $_SESSION['msgStore'];
        unset($_SESSION['msgStore']);
    }
    ?>
     </div>
    <div id="sub">
    <a href="index.php">click</a> back to Book home.
    </div>
</body>
</html>
