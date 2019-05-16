<?php
session_start();
if (isset($_SESSION['Message'])) {
    echo $_SESSION['Message'];
    unset($_SESSION['Message']);
}
?>
<html>
<title>City</title>
<body>
<fieldset>
    <legend>Add User</legend>
    <form action="store.php" method="POST">
        <label>User name</label>
        <input type="text" name="title" placeholder="Name"><br/>
        <label > Select City </label>

        <select name="city">
            <option value="Dhaka">Dhaka</option>
            <option value="Comilla">Comilla</option>
            <option value="Chuadanga">Chuadanga</option>
            <option value="Bogra">Bogra</option>
            <option value="Savar">Savar</option>
            <option value="Rangpur">Rangpur</option>
        </select></br></br>

        <input type="submit" value="Save">
        <input type="reset" value="reset">

    </form>

</fieldset>
</br>
<a href="index.php">Back to City</a>



</body>
</html>