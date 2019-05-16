<?php
require_once('dbConnection/connection.php');

if(isset($_POST['user_name']) && !empty($_POST['user_name']) && !empty($_POST['email']) && isset($_POST['email'])){
    $name = $_POST['user_name'];
    $email = $_POST['email'];

    $storeQuery = "INSERT INTO info (`name`,`emails`) VALUES ('".$name."','".$email."')";
    mysqli_query($conn, $storeQuery);

        echo "Successfully Insert";

}else{
    echo "Insertion failed";
}

//echo $name.$email;


