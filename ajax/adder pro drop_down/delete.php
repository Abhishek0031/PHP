<?php
include("conn.php");
error_reporting(0);
try{
if(!$_POST["nid"])
{
    throw new Exception("data is not delete");
}
// echo $_POST["nid"];  
    if(isset($_POST["nid"]))
    { $id=$_POST["nid"];
    
    $que_data="DELETE FROM `data_tb` WHERE id='$id'";
    $que_adder="DELETE FROM `address_tb` WHERE id='$id'";

    mysqli_query($conn,$que_data);
    mysqli_query($conn,$que_adder);

    }
$ar = array('status' => 'success', 'data' => "data is deleted");
}
catch(Exception $e){
    $ar = array('status' => 'fail', 'data' => $e->getMessage());
}
print_r(json_encode($ar));

?>
