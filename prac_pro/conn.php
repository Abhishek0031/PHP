<?php
function connect(){
    $servername="localhost";
    $username="root";
   $password="";
   $database="prac_db";
    $con=mysqli_connect($servername,$username,$password,$database);
    if(!$con){
        throw new Exception(mysqli_connect_error());
    }
    return $con;
}

$conn=connect();
$que="CREATE DATABASE prac_db";
// mysqli_query($conn,$que);
$cre_st_tbl="CREATE table st_data(
    id int  PRIMARY KEY AUTO_INCREMENT,
        name varchar(30),
        email varchar(30) NOT NULL UNIQUE,
        password varchar(30),
        image varchar(50)
        );";
    // mysqli_query($conn,$cre_st_tbl);

$cre_adder_tbl="CREATE table st_adder(
    pid integer AUTO_INCREMENT PRIMARY KEY,
    id integer,
        country varchar(30),
        states varchar(30),
        city varchar(30)          
        );";
    // mysqli_query($conn,$cre_adder_tbl);
    


?>