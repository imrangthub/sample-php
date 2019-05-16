<?php
?>

<html>
<head>
    <title>add Secondary Section</title>
</head>
<body>
<form action="store.php" method="post">
    <fieldset>
        <legend>add secondary data</legend>
        <table width="400px"  bgcolor="#6495ed">

            <tr>
                <td>NID No:</td>
                <td><input type="text" name="nidNumber"/></td>
            </tr>
            <tr>
                <td>Current address:</td>
                <td><input type="text" name="current_address"/></td>
            </tr>
            <tr>
                <td>Phone:</td>
                <td><input type="text" name="phone"/></td>
            </tr>
        </table>



    </fieldset>
    <input type="submit">
</form>
<?php
session_start();
echo $_SESSION['msgStoreData'];
?>





</body>
</html>
