<?php


//  This is heredoc example
$str=<<<EOD

Example of string
spanning multiple line
using heredoc syntax.
EOD;

echo $str;

echo "</br>";

// This is nowdoc example

$str2=<<<'EOD'

Example of string spanning multiple lines
using nowdoc syntax.
EOD;

echo $str2;




