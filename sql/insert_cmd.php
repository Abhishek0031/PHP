<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ab";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
// Connection successful
echo "Connected successfully<br>";
// SQL query to create the table
$sql = "INSERT INTO (name, email ) VALUES ('abhishek', 'abhishek@gmail.com')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Table 'HELLO' created successfully";
} else {
    echo "Unsucessful  table: connection " . $conn->error;
}
// Close connection
$conn->close();
?>