<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_ujikom_rpl3";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error){
	die("Connection failed: " . $conn->connection_error);
}
?>