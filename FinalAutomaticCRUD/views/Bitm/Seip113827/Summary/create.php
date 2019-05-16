
<html>
<title>Summary</title>
<body>
<fieldset>
    <legend>Summary </legend>

    <form action="store.php" method="POST">

        <label for="tilte">Name of Organization:</label></br>
        <input type="text" name="title" id="title" placeholder="Name" required></br>
        <label for="summary">Summary of Organizations:</label></br>
        <textarea cols="50" rows="5" name="summary" required id="summary" placeholder="Write summary of organization"></textarea></br>
        <input type="submit" value="Save" name="submit">
        <input type="reset" value="reset">
    </form>
</fieldset>
</body>
</br>
<a href="index.php" ><input type="button" value="Back to Summary"/></a></br>
<?php
session_start();
if(isset($_SESSION['massege'])){
    echo $_SESSION['massege'];
    unset ($_SESSION['massege']);
}
?>

</html>
