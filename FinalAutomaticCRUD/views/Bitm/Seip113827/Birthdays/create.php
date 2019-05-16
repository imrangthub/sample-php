<?php
session_start();
?>
<html>
<head>
    <title>
        Birth Day
    </title>
</head>
<body>

<form action="store.php" method="post">
    <fieldset>
        Name:
        <input type="text" name="title"/></br>
        Birth Day:
        <input type="text" name="birthday"/></br>
        <input type="submit" value="SAVE"/>


    </fieldset>
</form>
<a href="index.php" ><input type="button" value="Back to Birthday"/></a></br>
<?php
if(!empty($_SESSION['massege'])){
    echo $_SESSION['massege'];
    unset($_SESSION['massege']);
}
?>

</body>
</html>

