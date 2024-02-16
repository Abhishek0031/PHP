<?php
include("conn.php");

$conn=connect();
    
$email=$_POST["email"];
$pass=$_POST["password"];
// echo $email;
$sel="SELECT * FROM st_data where email='$email' ";
$row=mysqli_query($conn,$sel);
// 
echo mysqli_num_rows($row);
try{
    if(mysqli_num_rows($row)<1)
    {
        throw new Exception("you need to sign up");
    }


// $arr=["status"=>"success","error"=>"you are login"];
$data=mysqli_fetch_assoc($row);
try{
if($email!=$data["email"])
{
    throw new Exception("email not found");
}
$arr=["status"=>"success","error"=>"you are login"];

try{


    if($pass!=$data["password"])
    {
    throw new Exception("password mismatch");

    }
        session_start();
        $_SESSION['name']=$data["name"];
        $_SESSION['password']=$data["password"];
        $_SESSION['email']=$data["email"];
        $arr=["status"=>"success","error"=>"you are login"];
    
    
}
catch(Exception $e)
{
    $arr=["status"=>"fail","error"=>$e->getMessage()];
}


}
catch(Exception $e)
{
    $arr=["status"=>"fail","error"=>$e->getMessage()];
}
}
catch(Exception $e)
{
    $arr=["status"=>"fail","error"=>$e->getMessage()];
}
print_r($arr) ;
// print_r($_POST);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="col-sm-3" id="myForm" method="post">
<div>
&nbsp; &nbsp;Forgotten account? ·
<a href="signup.php"> Sign up</a>
</div>
</form>
    
</body>
</html>
