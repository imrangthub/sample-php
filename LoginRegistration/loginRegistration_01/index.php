<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Registration</title>

</head>

<body>

<h1 align="center">Welcome user Login / Registration</h1>
<hr/>

<form action="store.php" method="post">

    <table>
        <tr>
            <td>User Name :</td>
            <td><input type="text" name="user_name" /></td>
        </tr>
        <tr>
            <td>Email :</td>
            <td><input type="email" name="email"/></td>
        </tr>
        <tr>
            <td>Password :</td>
            <td><input type="password" name="password"/></td>
        </tr>
        <tr>
            <td><input type="submit" value="SUBMIT"/> </td>
        </tr>


    </table>

</form>

<a href="logins.php">Login ?</a>




</body>
</html>