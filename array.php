<!DOCTYPE html>

<html>
<head>
<title>PHP ARRAY</title>
</head>
<body>

<h2>PHP Array List</h2>

<?php

//Create an array
$fruits=array("apple","banana","grapes","watermelon","mango");
$numbers=array(1,2,3,4,5);

//Display
echo "<h3>Associative Array: </h3>";

foreach($fruits as $singlefruit){
echo $singlefruit . "<br>";
}

echo "<h3>Indexed Array: </h3>";

foreach($numbers as $singlenumber){
echo $singlenumber . "<br>";
}

?>

</body>
</html>