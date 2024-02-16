<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
          div
          {
            position: absolute;
            top: 15%;
            left: 20%    ;
          }
          form
          {
             text-decoration:underline;
          }
          h1
          {
            position: absolute;
            top: 2%;
            left: 20%;
            text-decoration: underline;
          }
            </style>
    </head>
    <body>
        <h1>Registration Form</h1>
        <div style="padding:8px;background-color:aqua;width:500px; border:2px solid ;">
        <form action="#" method="post" style=" margin:4px  ">
            <table>
                <tr>
                    <td>student Id </td>
                    <td><input name="studentId" type="number"></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input name="name" type="text"></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input name="city" type="text" name="" id=""></td>
                </tr>
                <tr>
                    <td>user Id </td>
                    <td><input name="userId" type="number"></td>
                </tr>
                <tr>
                    <td>Id</td>
                    <td><input name="id" type="text"></td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td><input name="address" type="text"></td>
                </tr>
                <tr>
                    <td>PhoneNumber</td>
                    <td><input name="phoneNumber" type="number"></td>
                </tr>
                <tr><td><button name="sub" type="submit">Submit</button>
            </td></tr>
        </table>
        </div>
    </form>
    </body>
</html>


<?php
include('connecti_.php');
$student_id=$_POST['studentId'];
$name=$_POST['name'];
$city=$_POST['city'];
$id=$_POST['id'];
$address=$_POST['address'];
$phoneNumber=$_POST['phoneNumber'];
$userId=$_POST['userId'];

echo $userId;   

if(isset($_POST['sub']) &&($_POST['name'])!="" && $_POST['city']!="" && $_POST['studentId']!="")
{
    global $conn;
        
    $inr="INSERT INTO student  VALUES ('$student_id','$name','$city')";
    $res=mysqli_query($conn,$inr);
    
    $inr2="INSERT INTO user  VALUES ('$id','$userId','$address','$phoneNumber')";
    $res2=mysqli_query($conn,$inr2);
        
}


?>


    
    
    
    
         
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
















