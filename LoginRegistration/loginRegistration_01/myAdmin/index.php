<h1 align="center">Welcome to Administration page</h1>

<?php
session_start();
if(!isset($_SESSION['userName'])){
    header("location:../logins.php");
}
if(isset($_SESSION['userName'])){
    echo "Hello: ".$_SESSION['userName'];
}

?>

<a href="signOut.php?logout">Log out ?</a>
