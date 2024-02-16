<?php
include("conn.php");
$name=$_POST["name"];
// echo $name;
$que="SELECT DISTINCT city FROM `address_tb` WHERE states='$name'";
$row=mysqli_query($conn,$que);
$ar=[];
while($data=mysqli_fetch_assoc($row)){
    // print_r($data);
    $ar[]=$data;

}
print_r(json_encode($ar));
// print_r($ar);       
?>