<!DOCTYPE html>
<html>
<head>
    <title>PHP String Manipulation</title>
</head>
<body>

<h2>PHP String Manipulation Program</h2>

<?php

// Original String
$string = "Hello World";

// Display Original String
echo "<b>Original String:</b> " . $string . "<br><br>";

//Length of string
echo "<b>Length of String: </b>" . strlen($string) . "<br><br>";

//Reverse the String 
echo "<b>Reverse String: </b>" . strrev($string) . "<br><br>";

//Extract Substring
echo "<b>Substring: </b>" . substr($string, 0 ,5 ) . "<br><br>";

?>

</body>
</html>