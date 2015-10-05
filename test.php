<?php
$servername = "localhost:8889";
$username = "littlemermarx";
$password = "V1ct0rmy";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>