<?php
include("conn.php");
error_reporting(0);
try {
   if (!$_POST["nid"]) {

      throw new Exception("data fatch  error ");
   }
   $id = (int)($_POST["nid"]);
//    print(gettype($id)) ;
$que_data= "SELECT*FROM data_tb where id=$id";
$que_adder = "SELECT*FROM address_tb where id=$id";

$row_data = mysqli_query($conn, $que_data);
$row_adder = mysqli_query($conn, $que_adder);

$ar = [];
$ar_data = [];
$ar_adder = [];

$data_data = mysqli_fetch_assoc($row_data);
$data_adder = mysqli_fetch_assoc($row_adder);
// $ar_data = $data;
if(isset($data_adder["country"]))
{
$ar = $data_data+$data_adder;
}
else{
   $ar=$data_data;
}


} catch (Exception $e) {
   $ar = array('status' => 'fail', 'data' => $e->getMessage());
}

print_r(json_encode($ar)); 
// print_r($data_data);
// print_r($data_adder);
// print_r($ar);







// echo json_encode($ar);
