<?php
//namespace app;

echo __LINE__;   // showing line number
echo "</br>";

echo __FILE__;
echo "</br>";      // showing full path for this file and file name

echo __NAMESPACE__;   // return namespace name
echo "</br>";

echo __DIR__;       //Return file directory
echo "</br>";


function addition(){
    echo __FUNCTION__;            // Return function name...
}
addition();

