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
    ID country:
    <input type="number" name="id_cou">
    <br/><br/>
     country NAME:
    <input type="text" name="name" >
    <br/><br/>
    <input type="submit" name="submit" >

    <br/>
</br/>
    </form>
</body>
</html>


<?php
error_reporting(0);

include('connection.php');
$id=$_POST['id_cou'];
$country_name=$_POST['name'];
echo $name . $id;
$inr="INSERT INTO country(`id_cou`, `country_name`) VALUES ('$id','$country_name')";
mysqli_query($conn,$inr);


?>




