<?php



include('connecti_join.php');

$cre=" CREATE TABLE student 
( id INTEGER  PRIMARY KEY ,
  name VARCHAR(30),
  city VARCHAR(50)
);";


$cre2=" CREATE TABLE user 
( id INTEGER ,
  user_id INTEGER,
  add VARCHAR(30),
  ph_no INTEGER
);";


?>