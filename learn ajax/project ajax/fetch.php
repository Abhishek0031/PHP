<?php
include("conn.php");
error_reporting(0);
try {
   if (!$_POST["nid"]) {

      throw new Exception("data fatch  error ");
   }
   $id = (int)($_POST["nid"]);
//    print(gettype($id)) ;  
$que = "SELECT*FROM data_tb where id=$id";
$row = mysqli_query($conn, $que);
$ar = [];

$data = mysqli_fetch_assoc($row);
$ar = $data;
} catch (Exception $e) {
   $ar = array('status' => 'fail', 'data' => $e->getMessage());
}






echo json_encode($ar);
