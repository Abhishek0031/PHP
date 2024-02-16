<?php

//echo "here in 2";
include("conn.php");
$conn=connect();
// if(isset($_POST['submit'])) {
    $name = $_POST["name"];
    $email=$_POST["email"];
    $password=($_POST["password"]) ;
    print_r($_FILES);
    print_r($_FILES["image"]);
    //    echo "$name, $email,$password "; 
    // print_r(json_encode($_POST));   
    $ins="INSERT INTO `st_data`( `name`, `email`, `password`, `image`) VALUES ('$name','$email','$password','')"


// }    
?>