<?php
if(!empty($_GET['action'])  && $_GET['action'] == 'change_email')
{
    $currentEmail=$_POST['currentEmail'];
    $newEmail=$_POST['newEmail'];
    session_start();
    $_SESSION['changeEmailMsg']="Your New Email is: ".$newEmail;
    header('location:../../../dashboard.php?page=setting_content');
}
if(!empty($_GET['action'])  && $_GET['action'] == 'change_password')
{
    $currentEmail=$_POST['currentPassword'];
    $newEmail=$_POST['newPassword'];
    session_start();
    $_SESSION['changePasswordMsg']="Your New Password is: ".$newEmail;
    header('location:../../../dashboard.php?page=setting_content');
}
if(!empty($_GET['action'])  && $_GET['action'] == 'deactivate_account')
{
    $Email=$_POST['email'];
    $Password=$_POST['password'];
    session_start();
    $_SESSION['deactivateAccMsg']="Your account will be closed !!";
    header('location:../../../index.php');
}


?>


