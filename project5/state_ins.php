<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="#" method="post">
    <br/> 
    
     ID country :
    <input type="number" name="id_state">
    <br/><br/>
     primary ID :
    <input type="number" name="id">
    <br/><br/>
     state NAME:
    <input type="text" name="name" >
    <br/>
</br/>
<input type="submit" name='submit'>
   </form>
</body>
</html>




<?php
error_reporting(0);

include('connection.php');
$id=$_POST['id_state'];
$id_pri=$_POST['id'];
$state_name=$_POST['name'];
echo $name . $id;
$inr="INSERT INTO states(`id_st`, `id_pri`, `states_name`) VALUES ('$id','$id_pri','$state_name')";
mysqli_query($conn,$inr);


?>