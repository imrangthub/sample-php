<?php
require_once('dbConnection/connection.php');

$search = $_POST['search'];
$searchQuery = "select * from info where name like '%$search%'";
$result = $conn->query($searchQuery);

$count = $result->num_rows;

//echo $count;

?>

<table class="table table-striped">
    <tr>
        <th>#</th><th>Name</th><th>Email</th>
    </tr>

<?php

if($count>0){
     while($data=$result->fetch_assoc()){
         echo "<tr>";
         echo "<td>".$data['id']."</td>";
         echo "<td>".$data['name']."</td>";
         echo "<td>".$data['emails']."</td>";
         echo "</tr>";

     }
   ?>
</table>
    <?php

}else{
    echo "No record found";
}











?>