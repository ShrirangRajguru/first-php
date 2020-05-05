<?php
	$servername = "localhost:3309";
	$username = "root";
	$password = "";

	// Create connection
	$conn = new mysqli($servername, $username, $password,"mylib");

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}	
?>