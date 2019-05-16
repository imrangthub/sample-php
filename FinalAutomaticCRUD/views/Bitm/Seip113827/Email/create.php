<?php
session_start();
?>
<html>
<head>
    <title>
        Email
    </title>
</head>
<body>

<form action="store.php" method="post">
    <fieldset>
        Name:
        <input type="text" name="title"/></br>
        Email:
        <input type="email" name="email"/></br>
        <input type="submit" value="SAVE"/>


    </fieldset>
</form>
<a href="index.php" ><input type="button" value="Back to Book"/></a></br>
<?php
if(!empty($_SESSION['massege'])){
    echo $_SESSION['massege'];
    unset($_SESSION['massege']);
}
?>

</body>
</html>

