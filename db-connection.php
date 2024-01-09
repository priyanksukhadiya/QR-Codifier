<?php
session_start();

// Database configuration
$servername = "localhost"; // Replace with your server name
$db_username = "root";   // Replace with your database username
$db_password = "";   // Replace with your database password
$dbname = "qr-generator";     // Replace with your database name

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connected Successfully. <br>";
}

// Return the database connection object
return $conn;
