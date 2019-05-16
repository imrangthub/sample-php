<?php
if(isset($_GET["nid_number"]) && !empty($_GET["nid_number"])){
    $NIDnumber=$_GET["nid_number"];
    echo $NIDnumber;
}

?>
<a href="index.php">Show Information.</a>
