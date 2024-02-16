<?php
 include('connection.php');
 $cre1="CREATE TABLE country
 ( id_cou INTEGER PRIMARY KEY ,
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
 ( id_st INTEGER,
 id_pri  INTEGER PRIMARY KEY,
   states_name varchar(30),
   FOREIGN KEY (id_st) REFERENCES country(id_cou)
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
 ( id_city INTEGER  ,
   id_pr INTEGER PRIMARY KEY,
   city_name varchar(30),
   FOREIGN KEY (id_city) REFERENCES states(id_pri)
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