<?php
include('../mpdf-mpdf/mpdf-mpdf-2764124/mpdf.php');
session_start();

print_r($_POST['data']);

die();

$mpdf=new mPDF();
$mpdf->WriteHTML($_SESSION['$PrimaryPrintData']);


$mpdf->Output();
exit();
