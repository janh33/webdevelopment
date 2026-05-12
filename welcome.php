<!DOCTYPE html>
<html>
<head>
    <title>Welcome Message with Date and Time</title>
</head>
<body>

<h2>PHP Date and Time Program</h2>

<?php

// Set Time Zone
date_default_timezone_set("Asia/Kolkata");

// Display Welcome Message
echo "<h3>Welcome to PHP Programming!</h3>";

// Display Current Date
echo "<b>Current Date:</b> ";
echo date("d-m-Y");

echo "<br><br>";

// Display Current Time
echo "<b>Current Time:</b> ";
echo date("h:i:s A");

?>

</body>
</html>