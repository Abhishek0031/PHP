<?php
error_reporting(0);
include_once('connection.php');


$name=$_POST["name"];
$email=$_POST["email"];
$age=$_POST["age"];

 $inr="INSERT INTO detail (namee,email,age) VALUES ('$name','$email','$age')";
 mysqli_query($conn,$inr);
?>

<html>
    <head>
        <title>
            session
        </title>
    </head>
    <body>
        
        <form action="#" method="post">
            Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="email" name="email">
            <br/><br/>Password:
            <input type="password" name="pass">
            <br/><br/>Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="name">
            <br/><br/>Age:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="number" name="age"><br/><br/>
            <input type="submit" name="submit">
        </form>   
        <!-- <a href="edit.php?">edit</a> -->
        
</body>
</html>