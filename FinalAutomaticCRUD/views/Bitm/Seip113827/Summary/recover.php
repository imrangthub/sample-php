<html>
<head>
    <title>Summary</title>
</head>
<body><h1 align="center">Welcome to Summary page</h1>

<table border="1" align="center">
    <tr>
        <td><a href="create.php">Add your Summary</a></td>
        <td colspan="2" align="center"><a href="../../../../index.php">Back to Home</a></td>
    </tr>
</table>
</body>
</html>
<?php
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\Summary\summarys;
$debug=new debugs();
$summarysObj=new summarys();




$summarysObj->recover($_GET['id']);






