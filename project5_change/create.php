<?php
 include('connection.php');
 $cre1="CREATE TABLE country
 ( id_cou INTEGER PRIMARY KEY AUTO_INCREMENT,
   country_name varchar(30)
   );";
  $che1= mysqli_query($conn,$cre1);
  if($che1)
{
echo "table country  is created";
}
else    
{
echo "fail to create table country";
}


$cre2="CREATE TABLE states
 ( f_id INTEGER,
   id_st  INTEGER PRIMARY KEY AUTO_INCREMENT,
   states_name varchar(30),
   FOREIGN KEY (f_id) REFERENCES country(id_cou)
   );";
  $che2= mysqli_query($conn,$cre2);
if($che2)
{
echo "table state is created";
}
else    
{
echo "fail to create  table satates";
}


$cre3="CREATE TABLE city
 ( f_id INTEGER  ,
   city_name varchar(30),
   FOREIGN KEY (f_id) REFERENCES states(id_st)
   );";
  $che3= mysqli_query($conn,$cre3);
if($che3)
{
echo "table state is created";
}
else    
{
echo "fail to create  table satates";
}


?>