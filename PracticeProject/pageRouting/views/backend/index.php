<?php


if(!empty($_GET['page']) && $_GET['page'] == 'book')
{

    header('location:Book/index.php');
} elseif (!empty($_GET['page']) && $_GET['page'] == 'mobile')
{
    $header = 'Mobile/index.php';
    include_once $header;
} elseif (!empty($_GET['page']) && $_GET['page'] == 'home')
{
    $header = 'Home/index.php';
    include_once $header;
}





?>

