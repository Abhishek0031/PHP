<?php
include_once('connection.php');
$sq="CREATE TABLE TEACHER   
(   id INTEGER PRIMARY key AUTO_INCREMENT,
    namee varchar(30),
    email varchar(30),
    phno INTEGER,
    address varchar(50)  
)";
mysqli_query($conn,$sq);

$sqq="CREATE TABLE TEACHER   
(   id INTEGER PRIMARY key AUTO_INCREMENT,
    rno INTEGER,
    namee varchar(30),
    email varchar(30),
    phno INTEGER,
      
)";
mysqli_query($conn,$sq);

?>