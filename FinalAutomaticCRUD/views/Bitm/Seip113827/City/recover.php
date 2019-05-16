<html>
<head>
    <title>City</title>
</head>
<body><h1 align="center">Welcome to City page</h1>

<table border="1" align="center">
    <tr>
        <td><a href="create.php">Add Data</a></td>
        <td colspan="2" align="center"><a href="../../../../index.php">Back to Home</a></td>
    </tr>
</table>
</body>
</html>
<?php
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\City\citys;
$debug=new debugs();
$citysObj=new citys();
$myID=$_GET['id'];



$citysObj->recover($_GET['id']);






