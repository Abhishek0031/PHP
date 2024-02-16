<?php
// print_r($_POST);
include("conn.php");
if (isset($_POST["name"])) {
    $data=file_get_contents("php://input");
    $mydata=json_decode($data,true);    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $ins = "INSERT INTO data_tb(name, email) VALUES ('$name','$email')";
    // mysqli_query($conn, $ins);
    if(mysqli_query($conn, $ins)==true)
    {
        echo 'data is inserted';
    }
    else 
    {
        echo 'data is not inserted';
    }
  }
?>