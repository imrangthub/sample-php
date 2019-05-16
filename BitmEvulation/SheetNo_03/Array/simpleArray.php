<?php

$book=array('JAVA','C','CCNA','C++');

$book_2=array(
    "one" => "JAVA",
    "two" => "C",
    "three" => "CCNA"
);

                                            // Short array syntax.
$month=['January','February','March'];
echo $month[2];
echo "</br>";

$day=["1" => "Saturday","2" => "Sunday","3" => "Monday"];

echo 'I will met you '.$month[0]." and the day is $day[2].";
echo "</br>";

// Multi dimensional array

$customer=array(
    "Rohaim"=>array("Location" => "Bangladesh","age" => "35","Profession" => "Driver"),
    "Jon" =>array("Location" => "USA","age" =>"33","Profession" => "Engineer"),
    "Sara" =>array("Location" => "UK","age" =>"25","Profession" => "Teacher")
);


foreach($customer as $cust => $CusDetil){
    echo 'Customer Name:'.$cust." from $CusDetil[Location], Age $CusDetil[age] and profession $CusDetil[Profession].";
    echo "</br> ";

}


