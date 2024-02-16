<?php
$servername = "localhost";
$username = "root";
$password = "";
// $database = "ram";



$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully<br>";


$sql="CREATE DATABASE ram";
mysqli_query($conn,$sql);
if ($conn->query($sql) === TRUE) 
{
    echo "database  created successfully";
} else {
    echo "Unsucessfull database criation: ";
}
 
  




// Close connection
$conn->close();
?>