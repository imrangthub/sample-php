
<html>
<head>
    <title>Photo</title>

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
    <form action="store.php" method="post" enctype="multipart/form-data">
        <table align="center">
            <tr>
                <td>Name: </td>
                <td><input type="text" name="title"/></td>
            </tr>
            <tr>
                <td>Photo: </td>
                <td><input type="file" name="myPhoto"/></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SAVE" /></td>
            </tr>
        </table>
    </form>

    <?php
    session_start();
   if(!empty($_SESSION['msgStore'])){
       echo $_SESSION['msgStore'];
       unset($_SESSION['msgStore']);
   }
    ?>
    </div>
<div id="sub">
    <table>
        <tr>
            <td><a href="index.php">click</a> for photo home. </td>
        </tr>
    </table>
</div>
</body>
</html>





