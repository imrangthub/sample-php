<?php
session_start();
?>
<html>
<head>
    <title>
    </title>
</head>
<body>

<form action="store.php" method="post" enctype="multipart/form-data">
    <fieldset>
        Name:
        <input type="text" name="title"/></br>
        Image:
        <input type="file" name="profilepic"></br>
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

