<?php

session_start();
if (isset($_SESSION['Message'])) {
    echo $_SESSION['Message'];
    unset($_SESSION['Message']);
}

?>
<html>
<title>Gender</title>
<body>
<fieldset>
    <legend>Add Person</legend>
    <form action="store.php" method="POST">
        <label>Enter your name</label>
        <input type="text" name="title" placeholder="Name"><br/>
        <label > Gender </label><br/>
        <input type="radio" name="gender" value="Male">Male<br/>
        <input type="radio" name="gender" value="Female">Female<br/>
        <input type="submit" value="Save" name="submit">
        <input type="reset" value="reset">

    </form>

</fieldset>
</br>
<a href="index.php" ><input type="button" value="Back to Birthday"/></a></br>


</body>
</html>