<?php
// error_reporting(0);
$HOSTNAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="aja_adder";
// $DATABASEs="ajax";   


$conn=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);



$cmd="CREATE DATABASE ajax";
// mysqli_query($conn,$cmd);
//data table
$create="CREATE  TABLE data_tb(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30),
    email VARCHAR (30) ) ;";
// address table 
    $create2="CREATE  TABLE address_tb(
    p_id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id INTEGER,
    country VARCHAR(30),
    states VARCHAR(30),
    city VARCHAR(30)
    ) ;";
    
 
//  mysqli_query($conn,$create);
//  mysqli_query($conn,$create2); 




?>