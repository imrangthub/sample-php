
<html>
<head>
    <title>Person</title>

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
    <form action="store.php" method="post";>
        <fieldset>
            <legend>add person</legend>
            <table>
                <tr>
                    <td>Name:</td><td><input type="text" name="title"></td>
                </tr>
                <tr>
                    <td>Birthday:</td><td><input type="text" name="birthday"></td>
                </tr>
                <tr>
                    <td>Gender:</td><td>
                        <input type="radio" name="gender" value="Male">Male</br>
                        <input type="radio" name="gender" value="Female">Felame</br>
                    </td>
                </tr>
                <tr><td><input type="reset" value="RESET"></td><td><input type="submit" value="SAVE"> </td></tr>
            </table>
        </fieldset>
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
            <td><a href="index.php">click</a> for Gender and Birthday . </td>
        </tr>
    </table>
</div>
</body>
</html>





