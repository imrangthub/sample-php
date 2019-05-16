<?php
session_start()
?>
<html>
<head>
    <title>Hobby|page</title>
</head>
<body><h1 align="center"></h1>

<form action="store.php" method="post">
    <fieldset>
        <legend>Inseart your Hobby</legend>
         Name:
        <input type="text" name="title"></br>
        <input type="checkbox" name="hobby[]" value="programming">Programmibg</br>
        <input type="checkbox" name="hobby[]" value="networking">Networking</br>
        <input type="checkbox" name="hobby[]" value="degsin">Degesin.</br>

        <input type="submit" value="SAVE">

    </fieldset>

</form>
<a href="index.php" ><input type="button" value="Back to Mobile"/></a></br>

<?php
if(!empty($_SESSION['massege'])){
    echo $_SESSION['massege'];
    unset($_SESSION['massege']);
}
?>



</body>
</html>