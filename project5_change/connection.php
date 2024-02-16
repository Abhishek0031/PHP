<?php
$HOSTNAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="newdb";
$conn=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
$cre="CREATE DATABASE newdb";
//  mysqli_query($conn,$cre);
if($conn)
{
echo "conection is OK";
}
else    
{
echo "fail to connect to server";
}
?>