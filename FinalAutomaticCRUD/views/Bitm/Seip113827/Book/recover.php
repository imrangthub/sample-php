<html>
<head>
    <title>MOBILE</title>
</head>
<body><h1 align="center">Welcome to MOBILE page</h1>

<table border="1" align="center">
    <tr>
        <td><a href="create.php">Add your Mobile</a></td>
        <td colspan="2" align="center"><a href="../../../../index.php">Back to Home</a></td>
    </tr>
</table>
</body>
</html>
<?php
include_once('../../../../vendor/autoload.php');
use App\Bitm\Seip113827\Utility\debugs;
use App\Bitm\Seip113827\Book\books;
$debug=new debugs();
$booksObj=new books();




$booksObj->recover($_GET['id']);






