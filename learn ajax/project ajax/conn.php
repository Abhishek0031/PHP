<?php
// error_reporting(0);
$HOSTNAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="ajax";
$conn=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);



$cmd="CREATE DATABASE ajax";
// mysqli_query($conn,$cmd);
$create="CREATE  TABLE data_tb(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30),
    email VARCHAR (30));";
 
//  mysqli_query($conn,$create); 



?>