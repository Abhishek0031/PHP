<?php
include("conn.php");
print_r($_POST);
// if (isset($_POST["sub"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $ins = "INSERT INTO data_tb(name, email) VALUES ('$name','$email')";
  mysqli_query($conn, $ins);
// }


?>