<?php
// error_reporting(0);
$HOSTNAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="ajax";
$conn=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if($conn)
{
echo "conection is OK";
}
else    
{
echo "fail to connect to server";
}

$cmd="CREATE DATABASE ajax";
// mysqli_query($conn,$cmd);
$create="CREATE  TABLE data_tb(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30),
    email VARCHAR (30));";
 
//  mysqli_query($conn,$create); 



?>