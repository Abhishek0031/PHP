<?php
include("conn.php");
$que = "SELECT * FROM data_tb";
$data = mysqli_query($conn, $que);
// echo "<table border='2px solid black'>";
$arr=[];
while ($new = mysqli_fetch_assoc($data)) {
   $arr[]=$new;   
   // array_push($arr, $new);
}
$a = json_encode($arr);
echo ($a);
