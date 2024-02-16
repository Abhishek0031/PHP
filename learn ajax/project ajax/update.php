<?php
include("conn.php");
error_reporting(0);
    try{
        if(!isset($_POST["id"]))
        {
            throw new Exception("some error occure to update data");
        }
        $id=$_POST["id"];   
        $name = $_POST["name"];
        $email = $_POST["email"];
        // echo "<br>";
        // echo $_POST["name"];
        $ins = "UPDATE data_tb SET `name`='$name',`email`='$email' WHERE    id=$id";
        
        mysqli_query($conn, $ins);
        $response = array('status' => 'success', 'data' => "data updated");
    } 
    catch(Exception $e){
        $response = array('status' => 'fail', 'data' => $e->getMessage());
    }
    
    
    print_r(json_encode($response));
  
?>