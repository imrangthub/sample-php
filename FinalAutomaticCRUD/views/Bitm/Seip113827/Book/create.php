<?php
 session_start()
?>
<html>
<head>
    <title>create|page</title>
</head>
<body><h1 align="center"></h1>

<form action="store.php" method="post">
    <fieldset>
        <legend>Inseart your book</legend>
        Book Name:<input type="text" name="title"></br>
        Writer Name:<input type="text" name="writer"></br>
        <input type="submit" value="SAVE">

    </fieldset>


</form>
<?php
if(!empty($_SESSION['massege'])){
    echo $_SESSION['massege'];
    unset($_SESSION['massege']);
}
?>


<a href="index.php" ><input type="button" value="Back to Book"/></a>
</body>
</html>