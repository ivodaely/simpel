<?php
  $host = "your_mysql_host";  // Hostname of your MySQL server (usually "localhost" on cPanel)
  $username = "your_mysql_username";  // MySQL username
  $password = "your_mysql_password";  // MySQL password
  $database = "your_database_name";  // Name of your database

  // Create a connection
  $connection = mysqli_connect($host, $username, $password, $database);

// Check the connection
  if (!$connection) {
      $say = "Connection Where ???";
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
