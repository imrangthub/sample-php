<?php
?>

<html>
<head>
    <title>add Crime </title>
</head>
<body>
<form action="store.php" method="post">
    <fieldset>
        <legend>add Crime</legend>
        <table width="400px"  bgcolor="#daa520">

            <tr>
                <td>NID No:</td>
                <td><input type="text" name="nidNumber"/></td>
            </tr>
            <tr>
                <td>Crime Title:</td>
                <td><input type="text" name="title"/></td>
            </tr>
            <tr>
                <td>Crime type:</td>
                <td><input type="text" name="type"/></td>
            </tr>
            <tr>
                <td>Description:</td>
                <td><input type="text" name="description"/></td>
            </tr>
            <tr>
                <td>Area of Thana:</td>
                <td><input type="text" name="thana_area"/></td>
            </tr>
            <tr>
                <td>Officer Zip code:</td>
                <td><input type="text" name="zip_code"/></td>
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
