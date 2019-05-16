<?php
include_once('../../src/Book/books.php');
$booksObj=new books();
$booksObj->prepar($_POST);
$booksObj->update();

