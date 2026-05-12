<!DOCTYPE html>
<html>
<head>
    <title>PHP POST Method Example</title>
</head>
<body>

<h2>User Information Form</h2>

<form method="POST">

    <label>Enter Name:</label>
    <input type="text" name="username">
    
    <br><br>

    <label>Enter Email:</label>
    <input type="email" name="email">

    <br><br>

    <input type="submit" value="Submit">

</form>

<?php

// Check if form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Collect form data
    $name = $_POST['username'];
    $email = $_POST['email'];

    // Display data
    echo "<h3>Entered Details:</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email;
}

?>

</body>
</html>