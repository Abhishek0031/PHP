<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sha";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
// Connection successful
echo "Connected successfully<br>";
// SQL query to create the table
$sql = "DROP database sha";
// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Table hello deleted successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
// Close connection
$conn->close();
?>