<?php
include("conn.php");
$name=$_POST["name"];
// echo $name;
$que="SELECT DISTINCT states FROM `address_tb` WHERE country='$name'";
$row=mysqli_query($conn,$que);
$ar=[];
while($data=mysqli_fetch_assoc($row)){
    // print_r($data);
    $ar[]=$data;

}
print_r(json_encode($ar));
?>