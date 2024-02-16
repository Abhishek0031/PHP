<?php
include_once('mk_connection.php');
// $a="CREATE DATABASE employe";
// mysqli_query($conn,$a);

$sq="CREATE TABLE employe_details  
(   id INTEGER PRIMARY key AUTO_INCREMENT,
    namee varchar(30),
    email varchar(30)
    
)";
mysqli_query($conn,$sq);

$em="CREATE TABLE employe_adder  
(   id INTEGER  AUTO_INCREMENT,
    emp_id INT PRIMARY KEY,
    adder varchar(30),
    phno varchar(30),   
    FOREIGN KEY (id) REFERENCES employe_details(id)
)";
mysqli_query($conn,$em);




?>