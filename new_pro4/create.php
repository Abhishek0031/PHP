<?php



include('connecti_.php');

$cre=" CREATE TABLE student 
( id INTEGER  PRIMARY KEY ,
  name VARCHAR(30),
  city VARCHAR(50)
);";

// $qu1=mysqli_query($conn,$cre);


$cre2=" CREATE TABLE student_det
( id INTEGER ,
  user_id INTEGER,
  addd VARCHAR(30),
  ph_no INTEGER 
);";

$qu2=mysqli_query($conn,$cre2);


?>