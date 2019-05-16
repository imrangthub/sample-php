
<html>
<body>
<fieldset>
    <legend>Cheak Condition</legend>
    <form action="store.php" method="post">
        User name:<input type="text" name="title" required/><br/>
        <label for="summary">Terms Condition:</label></br>
        <textarea cols="50" rows="5" name="condition"></textarea></br></br>
        I Accept<input type="checkbox" name="conditionAggery" value="Yes" /><br/></br>
        <button type="submit" >SAVE</button>
        <a href="index.php">Back to Home.</a>
    </form>
</fieldset></br>
<?php
session_start();
if(isset($_SESSION['massage'])){
    echo $_SESSION['massage'];
    unset($_SESSION['massage']);
}

?>
</body>
</html>