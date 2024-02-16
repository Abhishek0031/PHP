<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include("conn.php");

$selectQuery = "SELECT * From `tblclients`;";
$Fetchdata = mysqli_query($conn,$selectQuery);
if(mysqli_num_rows($Fetchdata) > 0){
    $Output = mysqli_fetch_all($Fetchdata,MYSQLI_ASSOC);
    echo(json_encode($Output));
} else{
    echo json_encode(array('message' => 'No Record Found','status' => false));
}

?>