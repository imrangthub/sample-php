
<html>
<head>
    <title>SummHobbCondit</title>

    <style>
        #middle{
            width:500px;
            height: 400px;
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
            <legend>Add student</legend>
            <table>
                <tr>
                    <td>Name:</td><td><input type="text" name="title"></td>
                </tr>
                <tr>
                    <td>Hobby:</td>
                    <td>
                        <input type="checkbox" name="hobby[]" value="programming">Programmibg</br>
                        <input type="checkbox" name="hobby[]" value="networking">Networking</br>
                        <input type="checkbox" name="hobby[]" value="designing">Designing</br>
                    </td>
                </tr>
                <tr>
                    <td>Summary:</td>
                    <td>
                        <textarea cols="50" rows="6" name="summary"  placeholder="write a short description about your hobby."></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>I accepted<input type="checkbox" name="condition" value="agree"/></td>
                </tr>
                <tr><td></td><td><input type="submit" value="SAVE"> </td></tr>
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
            <td><a href="index.php">click</a> for  home. </td>
        </tr>
    </table>
</div>
</body>
</html>





