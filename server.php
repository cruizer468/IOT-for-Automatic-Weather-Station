<?php
	$servername = "sql12.freesqldatabase.com";
	$username = "sql12173489";
	$password = "bQ2yPTn5UA";
	$dbname = "sql12173489";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	// Prepare the SQL statement
    $sql = "INSERT INTO TemperatureData (toptemperature) VALUES ('".$_GET["toptemperature"]."')";    

    // Execute SQL statement
    mysql_query($sql);
?>