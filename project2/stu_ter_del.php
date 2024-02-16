<?php
error_reporting(0);

include_once("trait.php");
include_once("connection.php");
$id = $_POST['idd'];
$type = $_GET['ty'];
echo "$id";

if( isset($_POST['submit']))
{
class disp
{  
    use creation; 
    
}

$obj = new disp();
$obj->delete_data($id,$type);
echo $type."&nbsp $id &nbsp";
}
?>




<!DOCTYPE html>
<html >
<head>
    <title>Document</title>
</head>
<body>
<form action="#" method="post">
        <br /><br />enter id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="number" name="idd">
        <br /><br />
        <input type="submit" name="submit">
</body>
</html>