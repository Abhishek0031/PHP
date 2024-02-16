<?php
$servername = "localhost";
$username = "root";
$password = "";


//data base creation

$conn = mysqli_connect($servername, $username, $password,);

$sql="CREATE DATABASE sha";
mysqli_query($conn,$sql);
if (!$conn) 
{global $conn;
    die("Connection failed: " . $conn->connect_error);
}
else
    echo "Connected successfully<br>";
    $conn = mysqli_connect($servername, $username, $password,'sha');
$cr="CREATE TABLE EMPLOYE
(
NAME varchar(20),
ID INT PRIMARY KEY)";
mysqli_query($conn,$cr);
// $name="abhishek";
// $name2="Abhishek2";
$inr="INSERT INTO EMPLOYE(NAME,ID) VALUES ('abhishek',1)";
// $inr2="INSERT INTO EMPLOYE  NAME,ID VALUES('abhishek',2)";
mysqli_query($conn,$inr);
$a="ALTER TABLE sha RENAME"
// mysqli_query($conn,$inr2);



//$sql="DROP DATABASE shinedesign";
// if (!$conn) 
// {
//     echo "database  created successfully";
// } else {
//     echo "Unsucessfull database criation: ";
// }

//data base creation end

// $co=mysqli_connect('localhost','root','','shayam');
// if($$co->connect_error)
// {
//     echo "connection fail".$co->connect_error;

// }
?>