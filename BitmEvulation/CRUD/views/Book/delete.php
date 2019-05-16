<?php
include_once('../../src/Book/books.php');
$booksObj=new books();
$id=$_GET['id'];
$booksObj->deleted($id);