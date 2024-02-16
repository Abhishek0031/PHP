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
$sql = "CREATE TABLE hello (
    id INT(5) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30),
    email VARCHAR(30),
    
)";
// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Table hello created successfully";
} else {
    echo "Unsucessfull table connection: " . $conn->error;
}
// Close connection
$conn->close();
?>