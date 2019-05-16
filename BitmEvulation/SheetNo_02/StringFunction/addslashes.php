<?php

//       addslashes()	Returns a string with backslashes in front of predefined characters


/**
The predefined characters are:

single quote (')
double quote (")
backslash (\)
NULL
 *
 */


$str= addslashes('What can you "want" to do?');

echo ($str);

echo "</br>";

$str = "Who's Peter Griffin?";
echo $str . " This is not safe in a database query.<br>";
echo addslashes($str) . " This is safe in a database query.";


