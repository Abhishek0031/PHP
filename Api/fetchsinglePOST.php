<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$data = json_decode(file_get_contents("php://input"),true);
$clientId = $data['cid'];

include("conn.php");

$selectQuery = "SELECT * From `tblclients` WHERE id = {$clientId};";
$Fetchdata = mysqli_query($conn,$selectQuery);
if(mysqli_num_rows($Fetchdata) > 0){

    $Output = mysqli_fetch_all($Fetchdata,MYSQLI_ASSOC);
    echo json_encode($Output);
} else{
    echo json_encode(array('message' => 'No Record Found','status' => false));
}


?>