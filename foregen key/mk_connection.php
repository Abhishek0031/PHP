<?php
//error_reporting(0);
$HOSTNAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="employe";
$conn=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if($conn)
{
echo "conection is OK";
}
else
{
echo "fail to connect to server";
}
?>