
<html>
<head>
    <title>CityEmail</title>

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
            <legend>add Customer</legend>
            <table>
                <tr>
                    <td>Customer Name:</td><td><input type="text" name="title"></td>
                </tr>
                <tr>
                    <td>Email:</td><td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td>
                        <select name="city">
                            <option value="Dhaka">Dhaka</option>
                            <option value="Comilla">Comilla</option>
                            <option value="Chuadanga">Chuadanga</option>
                            <option value="Bogra">Bogra</option>
                            <option value="Savar">Savar</option>
                            <option value="Rangpur">Rangpur</option>
                        </select>

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
            <td><a href="index.php">click</a> for home. </td>
        </tr>
    </table>
</div>
</body>
</html>





