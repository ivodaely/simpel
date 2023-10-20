<?php
 $host = "mysql.simpel.biz";  // Hostname of your MySQL server (usually "localhost" on cPanel)
 $username = "simpelbi_admin";  // MySQL username
 $password = "simpel2023";  // MySQL password
 $database = "simpelbi_simpel";  // Name of your database

// Create a connection
$connection = mysqli_connect($host, $username, $password, $database);

// Check the connection
if (!$connection) {
    $say = "not okay";
}

// Connected successfully
$say= "Connected to the MySQL database.";

// Now you can perform database operations here

// Close the connection when you're done
mysqli_close($connection);
?>


<html>
  <head>SIMPEL</head>
  <BODY>
    <h1><?=$say?></h1>
  </BODY>
</html>
