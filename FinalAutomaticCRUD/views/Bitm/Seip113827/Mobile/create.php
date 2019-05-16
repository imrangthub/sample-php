<?php
session_start();
?>

<html>
<head>
    <title>Mobile Home</title>
</head>
<body>
<h1 align="center">Add Mobile</h1>
<?php
if(!empty($_SESSION['massege'])){
    echo $_SESSION['massege'];
    unset($_SESSION['massege']);
 }
?>

<form action="store.php" method="post">
    <fieldset>
        <legend>Insert Mobile</legend>

        Mobile Name:
        <input type="text" name="title">
        <input type="submit" value="SAVE">


    </fieldset>
</form>
<a href="index.php" ><input type="button" value="Back to Mobile"/></a>




</body>
</html>