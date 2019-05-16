<?php
?>

<html>
<head>
    <title>add PrimarySection</title>
</head>
<body>
<form action="store.php" method="post">
    <fieldset>
        <legend>add person</legend>
        <table width="400px"  bgcolor="#6495ed">

            <tr>
                <td>NID No:</td>
                <td><input type="text" name="nidNumber"/></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name"/></td>
            </tr>
            <tr>
                <td>Father Name:</td>
                <td><input type="text" name="fatherName"/></td>
            </tr>
            <tr>
                <td>Mother Name:</td>
                <td><input type="text" name="motherName"/></td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><input type="text" name="birthday"/></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address"/></td>
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
